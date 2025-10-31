<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Models\Dokter;
use App\Models\Medicine;
use App\Models\Pasien;
use App\Models\Payment;
use App\Models\Person;
use App\Models\Resep;
use App\Models\Visit;
use App\Models\User;
use App\Models\VisitCharge;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitC extends Controller
{
    // Tampilkan daftar visit
    public function index(Request $request)
    {
        // Ambil tanggal dari filter, default hari ini
        $date = $request->input('tanggal') ? Carbon::parse($request->tanggal) : Carbon::today();

        // Query visits berdasarkan tanggal
        $visits = Visit::with(['pasien.person', 'dokter.person'])
            ->whereDate('created_at', $date) // filter tanggal
            ->orderBy('nomor_antrian', 'asc') // urut berdasarkan nomor antrean
            ->get();

        return view('backend.pages.visit.table', compact('visits', 'date'));
    }

    // Form tambah
    public function create()
    {
        $today = now()->toDateString();

        // Ambil daftar pasien yang sudah visit hari ini
        $usedPatientIds = Visit::whereDate('created_at', $today)
            ->pluck('pasien_id')
            ->toArray();

        // Pasien baru → belum pernah ada visit sama sekali
        $pasiensBaru = Pasien::with('person')
            ->whereDoesntHave('visits')
            ->get();

        // Pasien lama → sudah pernah visit sebelumnya, tapi belum visit hari ini
        $pasiensLama = Pasien::with('person')
            ->whereHas('visits')
            ->whereNotIn('id', $usedPatientIds)
            ->get();

        // Hitung nomor antrian terbaru
        $lastVisit = Visit::whereDate('created_at', $today)->latest()->first();
        if ($lastVisit && $lastVisit->nomor_antrian) {
            $lastNumber = intval(ltrim($lastVisit->nomor_antrian, 'A'));
            $nomorAntrian = $lastNumber + 1;
        } else {
            $nomorAntrian = 1;
        }
        $nomorAntrian = 'A' . str_pad($nomorAntrian, 3, '0', STR_PAD_LEFT);

        $dokters = Dokter::with('person')->get();

        return view('backend.pages.visit.create', compact(
            'pasiensBaru',
            'pasiensLama',
            'dokters',
            'nomorAntrian'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasien,id',
            'dokter_id' => 'required|exists:dokter,id',
            'tanggal_kunjungan' => 'required|date',
            'keluhan' => 'nullable|string',
        ]);

        DB::transaction(function () use ($request) {
            $today = now()->toDateString();

            // Lock query supaya tidak duplikat
            $lastVisit = Visit::whereDate('created_at', $today)
                ->lockForUpdate()
                ->latest()
                ->first();

            if ($lastVisit) {
                $lastNumber = intval(ltrim($lastVisit->nomor_antrian, 'A'));
                $nomorUrut = $lastNumber + 1;
            } else {
                $nomorUrut = 1;
            }
            $nomorAntrian = 'A' . str_pad($nomorUrut, 3, '0', STR_PAD_LEFT);

            $visit = Visit::create([
                'nomor_antrian' => $nomorAntrian,
                'pasien_id' => $request->pasien_id,
                'dokter_id' => $request->dokter_id,
                'tanggal_kunjungan' => $request->tanggal_kunjungan,
                'keluhan' => $request->keluhan,
                'status' => 'antri',
            ]);

            $adminCharge = Charge::where('name', 'Administrasi')->first();
            if ($adminCharge) {
                VisitCharge::create([
                    'visit_id' => $visit->id,
                    'charge_id' => $adminCharge->id,
                    'quantity' => 1,
                    'amount' => $adminCharge->amount,
                    'total' => $adminCharge->amount * 1,
                ]);

                Payment::create([
                    'visit_id' => $visit->id,
                    'subtotal' => $adminCharge->amount,
                    'tax' => 0,
                    'discount' => 0,
                    'total' => $adminCharge->amount,
                    'status' => 'unpaid', // ✅ sesuai enum
                ]);
            }
        });

        return redirect()->route('visit.table')
            ->with('success', 'Sesi berobat berhasil ditambahkan dengan billing administrasi.');
    }



    public function view($id)
    {

        // ambil data visit berdasarkan id
        $visit = Visit::with(['pasien', 'dokter', 'resepsionis'])->findOrFail($id);

        return view('backend.pages.visit.view', compact('visit'));
    }


    // Hapus
    public function destroy(Visit $visit)
    {
        $visit->delete();
        return redirect()->route('visits.index')->with('success', 'Sesi berobat berhasil dihapus.');
    }
}
