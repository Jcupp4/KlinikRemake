<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\Farmasi;
use App\Models\Medicine;
use App\Models\MedicineOrderItems;
use App\Models\MedicineOrders;
use App\Models\MedicineTransaction;
use App\Models\Payment;
use App\Models\User;
use App\Models\Visit;
use App\Models\VisitCharge;
use App\Notifications\ResepSiap;
use App\Services\ResepService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepC extends Controller
{
    protected $resepService;

    public function __construct(ResepService $resepService)
    {
        $this->resepService = $resepService;
    }

    /**
     * Form pembuatan resep
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view('resep.create', compact('medicines'));
    }

    /**
     * Simpan resep baru dari dokter dan kirim notifikasi ke farmasi
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id'         => 'required|exists:pasien,id',
            'medicine_id'       => 'required|array|min:1',
            'medicine_id.*'     => 'required|exists:medicines,id',
            'dosis.*'           => 'required|string',
            'jumlah.*'          => 'required|integer|min:1',
            'aturan_pakai.*'    => 'required|string',
            'catatan'           => 'nullable|string',
        ]);

        try {
            $order = $this->resepService->createResep([
                'pasien_id'     => $request->pasien_id,
                'dokter_id'     => auth()->id(),
                'catatan'       => $request->catatan,
                'visit_id'      => $request->visit_id ?? null,
                'medicine_id'   => $request->medicine_id,
                'dosis'         => $request->dosis,
                'jumlah'        => $request->jumlah,
                'aturan_pakai'  => $request->aturan_pakai,
            ]);

            $farmasiUsers = User::where('reference_type', Farmasi::class)->get();
            foreach ($farmasiUsers as $user) {
                $user->notify(new ResepSiap($order));
            }

            return redirect()->back()->with('success', 'Resep berhasil dikirim ke farmasi.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan resep: ' . $e->getMessage());
        }
    }



    /**
     * Update status order (farmasi)
     * - pending → processing → completed
     * - jika completed, ubah status visit jadi "selesai"
     * - hapus notifikasi terkait order
     */
    public function updateStatus(Request $request, $id)
    {
        $order = MedicineOrders::with(['items.medicine', 'visit'])->findOrFail($id);

        $validStatus = ['pending', 'processing', 'completed', 'cancelled'];
        if (!in_array($request->status, $validStatus)) {
            return redirect()->back()->with('error', 'Status tidak valid.');
        }

        DB::beginTransaction();

        try {
            // =========================
            // 1️⃣ Update status order utama
            // =========================
            $order->update(['status' => $request->status]);

            if ($request->status === 'completed' && $order->visit) {
                $visit = $order->visit;

                // =========================
                // 2️⃣ Hitung total obat dan update visit
                // =========================
                $totalObat = $order->items->sum(function ($item) {
                    return ($item->qty ?? 0) * ($item->harga ?? 0);
                });

                // Ubah status visit
                $visit->update(['status' => 'menunggu pembayaran']);

                // =========================
                // 3️⃣ Tambah ke VisitCharge (rincian billing)
                // =========================
                $medicineCharge = Charge::firstOrCreate(
                    ['name' => 'Obat'],
                    ['type' => 'obat', 'amount' => 0, 'is_active' => true]
                );

                VisitCharge::create([
                    'visit_id'  => $visit->id,
                    'charge_id' => $medicineCharge->id,
                    'quantity'  => 1,
                    'amount'    => $totalObat,
                    'total'     => $totalObat,
                ]);

                // =========================
                // 4️⃣ Update atau buat Payment
                // =========================
                $payment = $visit->payments()->first();
                if ($payment) {
                    $payment->update([
                        'subtotal' => $payment->subtotal + $totalObat,
                        'total'    => $payment->total + $totalObat,
                    ]);
                } else {
                    Payment::create([
                        'visit_id' => $visit->id,
                        'subtotal' => $totalObat,
                        'tax'      => 0,
                        'discount' => 0,
                        'total'    => $totalObat,
                        'status'   => 'unpaid',
                    ]);
                }

                // =========================
                // 5️⃣ Hapus notifikasi resep
                // =========================
                DB::table('notifications')
                    ->where('data->order_id', $order->id)
                    ->delete();

                // =========================
                // 6️⃣ Buat medicine_transaction (OUT)
                // =========================

                // Kita ambil langsung dari $order (karena $visit_id sudah ada di $order)
                foreach ($order->items as $item) {
                    $medicine = $item->medicine;

                    if ($medicine) {
                        MedicineTransaction::create([
                            'visit_id'     => $order->visit_id,  // ✅ ambil dari $order, bukan dari request
                            'medicine_id'  => $medicine->id,
                            'tipe'         => 'OUT',
                            'jumlah'       => $item->qty,
                            'deskripsi'    => "Pengeluaran untuk visit #{$order->visit_id} (order #{$item->order_id})",
                            'order_id'     => $item->order_id,
                            'tanggal'      => now(),
                            'sumber'       => 'ResepDokter',
                        ]);

                        // Kurangi stok obat
                        $medicine->decrement('stok', $item->qty);
                    }
                }
            } else {
                // =========================
                // 7️⃣ Kalau belum completed, update notifikasi saja
                // =========================
                DB::table('notifications')
                    ->where('data->order_id', $order->id)
                    ->update(['data->status' => $request->status]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Status resep berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal memperbarui status: ' . $e->getMessage());
        }
    }


    public function pay($visit_id)
    {
        // Ambil pembayaran berdasarkan visit_id
        $payment = Payment::where('visit_id', $visit_id)->first();

        if (!$payment) {
            return redirect()->back()->with('error', 'Pembayaran tidak ditemukan untuk visit ini.');
        }

        // Update status payment
        $payment->status = 'paid';
        $payment->save();

        // Tandai semua order di visit ini selesai
        $orders = MedicineOrders::where('visit_id', $visit_id)->get();
        foreach ($orders as $order) {
            $order->status = 'completed';
            $order->save();
        }

        // **Update status visit menjadi selesai**
        $visit = Visit::find($visit_id);
        if ($visit) {
            $visit->status = 'selesai';
            $visit->save();
        }

        return redirect()->back()->with('success', 'Pembayaran berhasil. Status payment dan visit diubah menjadi paid & selesai.');
    }
}
