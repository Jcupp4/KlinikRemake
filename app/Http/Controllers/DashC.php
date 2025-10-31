<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Farmasi;
use App\Models\Medicine;
use App\Models\MedicineOrders;
use App\Models\Pasien;
use App\Models\Payment;
use App\Models\Resepsionis;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashC extends Controller
{
    // Dashboard umum (admin)
    public function index()
    {
        $today = Carbon::today();

        /**
         * 🔢 Nomor Antrian Hari Ini
         */
        $lastVisitToday = Visit::whereDate('created_at', $today)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($lastVisitToday) {
            $lastNumber = (int) substr($lastVisitToday->no_antrian, 1);
            $lastAntrian = $lastVisitToday->no_antrian; // Nomor terakhir hari ini
            $nextAntrian = 'A' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $lastAntrian = null;
            $nextAntrian = 'A001';
        }

        /**
         * 📊 Statistik Dashboard
         */
        // Jumlah semua pasien
        $jumlahPasien = Pasien::count();

        // Jumlah kunjungan hari ini
        $kunjunganHariIni = Visit::whereDate('created_at', $today)->count();

        // Jumlah obat tersedia (stok > 0)
        $obatTersedia = Medicine::where('stok', '>', 0)->count();

        // Jumlah transaksi bulan ini
        $totalUangTransaksiBulanIni = Payment::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('total');

        // --- Data karyawan
        $dokters = Dokter::with(['person', 'user'])->get();
        $resepsionis = Resepsionis::with('person')->get();
        $farmasis = Farmasi::with(['person', 'user'])->get();

        $medicines = Medicine::all();

        return view('backend.dash', compact(
            'lastAntrian',
            'nextAntrian',
            'jumlahPasien',
            'kunjunganHariIni',
            'obatTersedia',
            'totalUangTransaksiBulanIni',
            'medicines',
            'dokters',
            'resepsionis',
            'farmasis'
        ));
    }


    // Dashboard resepsionis
    public function resepsionis()
    {
        $today = Carbon::today();

        // Ambil kunjungan terakhir hari ini
        $lastVisitToday = Visit::whereDate('created_at', $today)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($lastVisitToday) {
            $lastNumber = (int) substr($lastVisitToday->no_antrian, 1);
            $lastAntrian = $lastVisitToday->no_antrian; // Nomor terakhir hari ini
            $nextAntrian = 'A' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $lastAntrian = null;
            $nextAntrian = 'A001';
        }

        $jumlahPasien = Pasien::count();

        // Jumlah kunjungan hari ini
        $kunjunganHariIni = Visit::whereDate('created_at', $today)->count();

        // Jumlah obat tersedia (stok > 0)
        $obatTersedia = Medicine::where('stok', '>', 0)->count();

        // Daftar antrian hari ini
        $antrianList = Visit::with('pasien')
            ->whereDate('created_at', $today)
            ->orderBy('created_at', 'asc')
            ->get();


        // Pegawai
        $dokters = Dokter::with(['person', 'user'])->get();
        $resepsionis = Resepsionis::with('person')->get();
        $farmasis = Farmasi::with(['person', 'user'])->get();

        // // Jadwal dokter (opsional)
        // $jadwalDokter = JadwalDokter::with('dokter.person')
        //     ->whereDate('tanggal', $today)
        //     ->get();

        return view('backend.dashboard.resepsionis', compact(
            'lastAntrian',
            'nextAntrian',
            'jumlahPasien',
            'kunjunganHariIni',
            'obatTersedia',
            'dokters',
            'resepsionis',
            'farmasis'
        ));
    }

    // Dashboard farmasi
    public function farmasi()
    {
        $medicineOrders = MedicineOrders::with(['pasien', 'items.medicine', 'dokter'])
            ->whereDate('created_at', now()->toDateString()) // hanya ambil data hari ini
            ->get();

        return view('backend.dashboard.farmasi', compact('medicineOrders'));
    }




    // Dashboard dokter
    public function dokter(Request $request)
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
}
