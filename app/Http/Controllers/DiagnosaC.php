<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\Diagnosa;
use App\Models\Farmasi;
use App\Models\Icd;
use App\Models\Medicine;
use App\Models\MedicineOrder;
use App\Models\MedicineOrderItem;
use App\Models\MedicineOrderItems;
use App\Models\MedicineOrders;
use App\Models\Pasien;
use App\Models\Payment;
use App\Models\Resep;
use App\Models\Rujukan;
use App\Models\RumahSakit;
use App\Models\User;
use App\Models\Visit;
use App\Models\VisitCharge;
use App\Notifications\ResepSiap;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaC extends Controller
{
    public function create($id)
    {
        $resep = MedicineOrders::with(['items', 'pasien', 'dokter'])->get();
        $medicines = Medicine::all();

        $visit = Visit::with(['pasien.person', 'dokter.person'])->findOrFail($id);

        // ambil pasien dari relasi visit
        $pasien = $visit->pasien;

        if (!$pasien) {
            return redirect()->back()->with('error', 'Pasien tidak ditemukan');
        }

        // hitung umur jika ada tanggal lahir
        $age = null;
        if ($pasien->person && $pasien->person->dob) {
            $age = Carbon::parse($pasien->person->dob)->age;
        }

        $rumahsakit = RumahSakit::all();
        $pasiens    = Pasien::with('person')->get();
        $icdCodes   = Icd::limit(100)->get();

        return view('backend.pages.visit.periksa', compact(
            'visit',
            'pasien',
            'icdCodes',
            'rumahsakit',
            'age',
            'resep',
            'medicines'
        ));
    }

    public function store(Request $request, $id)
    {
        $rules = [
            'icd_id'         => 'required|exists:icds,id',
            'catatan'        => 'nullable|string',
            'status_rujukan' => 'required|in:tidak,dirujuk',
            'alamat_tujuan'  => 'nullable|string',
            'telepon_tujuan' => 'nullable|string',
        ];

        if ($request->status_rujukan === 'dirujuk') {
            $rules['alasan_rujukan'] = 'required|string';
            $rules['rujukan_id']     = 'required|exists:rumah_sakit,id';
        }

        $validated = $request->validate($rules);

        $visit = Visit::findOrFail($id);
        $icd   = Icd::findOrFail($validated['icd_id']);

        // 1️⃣ simpan diagnosa
        $visit->diagnosa()->create([
            'icd_id'    => $icd->id,
            'kode_icd'  => $icd->code,
            'deskripsi' => $icd->description,
            'catatan'   => $validated['catatan'] ?? null,
            'dokter_id' => $visit->dokter_id,
        ]);

        // 2️⃣ tambah billing pemeriksaan otomatis
        // misal Charge 'Pemeriksaan Dokter' sudah ada di tabel charges
        $checkupCharge = Charge::where('name', 'Pemeriksaan Dokter')->first();
        if ($checkupCharge) {
            $visitCharge = VisitCharge::create([
                'visit_id' => $visit->id,
                'charge_id' => $checkupCharge->id,
                'quantity' => 1,
                'amount' => $checkupCharge->amount,
                'total' => $checkupCharge->amount * 1,
            ]);

            // update payment
            $payment = $visit->payments()->first();
            if ($payment) {
                $payment->update([
                    'subtotal' => $payment->subtotal + $visitCharge->total,
                    'total'    => $payment->total + $visitCharge->total,
                ]);
            } else {
                // kalau belum ada payment record sama sekali
                Payment::create([
                    'visit_id' => $visit->id,
                    'subtotal' => $visitCharge->total,
                    'tax'      => 0,
                    'discount' => 0,
                    'total'    => $visitCharge->total,
                    'status'   => 'unpaid',
                ]);
            }
        }

        // 3️⃣ update status visit
        if ($validated['status_rujukan'] === 'dirujuk') {
            $rujukan = Rujukan::create([
                'pasien_id'       => $visit->pasien_id,
                'dokter_id'       => $visit->dokter_id,
                'diagnosa'        => $icd->description,
                'alasan_rujukan'  => $validated['alasan_rujukan'],
                'tujuan_rujukan'  => $validated['rujukan_id'],
                'alamat_tujuan'   => $validated['alamat_tujuan'],
                'telepon_tujuan'  => $validated['telepon_tujuan'],
                'tanggal_rujukan' => now()->toDateString(),
                'status'          => 'pending',
            ]);

            $visit->status = 'rujuk';
        } else {
            $visit->status = 'menunggu resep';
        }

        $visit->save();

        return redirect()->route('visit.table')
            ->with('success', 'Diagnosa pasien berhasil dicatat dan billing pemeriksaan otomatis dibuat.');
    }


    public function storeResep(Request $request, $visitId)
    {
        $visit = Visit::findOrFail($visitId);

        DB::transaction(function () use ($request, $visit) {

            // 1️⃣ Buat order resep
            $order = MedicineOrders::create([
                'visit_id'   => $visit->id,
                'pasien_id'  => $visit->pasien_id,
                'dokter_id'  => auth()->id(), // pakai id user (dokter login)
                'status'     => 'pending',
                'catatan'    => $request->catatan_umum ?? null,
            ]);

            // 2️⃣ Tambahkan item resep
            foreach ($request->medicine_id as $index => $medicineId) {
                MedicineOrderItems::create([
                    'order_id'      => $order->id, // pakai 'order_id' sesuai field di tabel medicine_order_items
                    'medicine_id'   => $medicineId,
                    'qty'           => $request->jumlah[$index] ?? 1,
                    'dosis'         => $request->dosis[$index] ?? '-',
                    'aturan_pakai'  => $request->aturan_pakai[$index] ?? '-',
                    'harga'         => 0,
                ]);
            }

            // 3️⃣ Kirim notifikasi ke farmasi
            $farmasiUsers = User::where('reference_type', Farmasi::class)->get();

            foreach ($farmasiUsers as $user) {
                $user->notify(new ResepSiap($order));
            }

            // 4️⃣ Update status visit
            $visit->update(['status' => 'menunggu pembayaran']);
        });

        return redirect()->back()->with('success', 'Resep berhasil dicatat dan dikirim ke farmasi.');
    }


}
