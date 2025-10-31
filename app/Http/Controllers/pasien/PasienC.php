<?php

namespace App\Http\Controllers\pasien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\Pasien;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class PasienC extends Controller
{
    // Tampilkan halaman tabel pasien
    public function index(Request $request)
    {
        // default ke tanggal kemarin
        $tanggal = $request->get('tanggal', now()->subDay()->toDateString());

        // Ambil pasien yang pertama kali terdaftar tepat di tanggal tsb
        $pasiens = Pasien::whereDate('created_at', $tanggal)->get();

        return view('backend.pages.people.pasien.table', compact('tanggal', 'pasiens'));
    }


    public function view($id)
    {
        $pasien = Pasien::with([
            'person',
            'medicineOrders.items.medicine',
            'medicineOrders.dokter'
        ])->find($id);

        if (!$pasien) {
            return redirect()->back()->with('error', 'Pasien tidak ditemukan');
        }

        // Hitung umur pasien
        $age = null;
        if (!empty($pasien->person->dob)) {
            try {
                $age = \Carbon\Carbon::parse($pasien->person->dob)->age;
            } catch (\Exception $e) {
                $age = null;
            }
        }

        // Ambil data obat untuk modal tambah resep
        $medicines = Medicine::orderBy('name')->get();

        return view('backend.pages.people.pasien.view', compact('pasien', 'age', 'medicines'));
    }




    public function periksa(Request $request)
    {
        // contoh jika pakai id pasien dari query / form
        $id = $request->id;

        // ambil data pasien dari model
        $pasiens = \App\Models\Pasien::find($id);

        return view('backend.pages.people.pasien.periksa', compact('pasiens'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'sex' => 'required|in:laki-laki,perempuan',
            'kontak_darurat' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:500',
        ]);

        // Ambil data pasien
        $pasien = Pasien::findOrFail($id);

        // Update tabel pasien
        $pasien->update([
            'kontak_darurat' => $request->kontak_darurat,
            'alamat' => $request->alamat,
        ]);

        // Update relasi person jika ada
        $pasien->person->update([
            'name' => $request->name,
            'sex' => $request->sex,
        ]);

        return redirect()->back()->with('success', 'Data pasien berhasil diperbarui.');
    }


    // Tampilkan halaman form tambah pasien
    public function create()
    {
        return view('backend.pages.people.pasien.form');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'     => 'required|string',
            'pob'              => 'required|string',
            'dob'              => 'required|date',
            'sex'              => 'required|in:laki-laki,perempuan',
            'alamat'           => 'nullable|string',
            'kontak_darurat'   => 'nullable|string',
        ]);

        // 1. Simpan ke people
        $person = \App\Models\Person::create([
            'name'           => $request->nama_lengkap,
            'dob'            => $request->dob,
            'pob'            => $request->pob,
            'sex'            => $request->sex,
            'reference_type' => \App\Models\Pasien::class,
            'reference_id'   => 0,
        ]);

        // 2. Simpan ke pasien
        $pasien = \App\Models\Pasien::create([
            'person_id'       => $person->id,
            'no_rm'           => 'RM-' . str_pad($person->id, 5, '0', STR_PAD_LEFT),
            'alamat'          => $request->alamat,
            'kontak_darurat'  => $request->kontak_darurat,
        ]);

        // 3. Update reference_id
        $person->update(['reference_id' => $pasien->id]);

        return redirect()->route('pasien.table')->with('success', 'Pasien berhasil ditambahkan');
    }

    public function delete($id)
    {
        // Cari pasien
        $pasien = Pasien::findOrFail($id);

        // Hapus relasi person jika ingin ikut dihapus
        if ($pasien->person) {
            $pasien->person->delete();
        }

        // Hapus pasien
        $pasien->delete();

        return redirect()->back()->with('success', 'Data pasien berhasil dihapus.');
    }


    public function pasienLama()
    {
        // Ambil pasien yang sudah pernah punya visit dengan status selesai
        $pasiens = \App\Models\Pasien::withCount(['visits as total_kunjungan' => function ($q) {
            $q->where('status', 'selesai');
        }])
            ->having('total_kunjungan', '>=', 1) // ubah >=2 kalau mau pasien lama minimal datang 2x
            ->get();

        return view('backend.pages.people.pasien-lama.table', compact('pasiens'));
    }

    public function printCard($id)
    {
        $pasien = Pasien::findOrFail($id);

        // Load tampilan Blade ke PDF
        $pdf = Pdf::loadView('backend.pages.people.pasien.print_card', compact('pasien'))
            ->setPaper([0, 0, 242.65, 152.40], 'landscape'); // ukuran kartu kredit (CR80)


        return $pdf->stream('kartu-berobat-' . $pasien->no_rm . '.pdf');
    }
}
