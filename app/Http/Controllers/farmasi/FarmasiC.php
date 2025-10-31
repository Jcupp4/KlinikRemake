<?php

namespace App\Http\Controllers\farmasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Farmasi;
use App\Models\MedicineOrders;
use App\Models\Person;
use App\Models\Resep;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FarmasiC extends Controller
{
    public function index()
    {
        $farmasis = Farmasi::with(['person', 'user'])->latest()->get();

        return view('backend.pages.people.farmasi.table', compact('farmasis'));
    }


    public function create()
    {
        return view('backend.pages.people.farmasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'pob'          => 'required|string|max:255',
            'dob'          => 'required|date',
            'sex'          => 'required|in:laki-laki,perempuan',
            'username'     => 'required|string|max:255|unique:users,username',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|string|min:6',
            'telepon'      => 'required|string|max:20',
            'nip'          => 'nullable|string|max:50',
            'shift'        => 'required|string|max:50',
            'pendidikan_terakhir' => 'nullable|string|max:255',
            'status_kepegawaian'  => 'nullable|string|max:50',
            'tanggal_mulai_kerja' => 'nullable|date',
            'aktif'        => 'required|boolean',
        ]);

        // 1. Simpan ke tabel people
        $person = Person::create([
            'name'           => $request->nama_lengkap,
            'dob'            => $request->dob,
            'pob'            => $request->pob,
            'sex'            => $request->sex,
            'phone'          => $request->telepon,
            'reference_type' => Farmasi::class,
            'reference_id'   => 0, // nanti diupdate
        ]);

        // 2. Simpan ke tabel farmasi
        $farmasi = Farmasi::create([
            'person_id'           => $person->id,
            'nip'                 => $request->nip,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'status_kepegawaian'  => $request->status_kepegawaian,
            'tanggal_mulai_kerja' => $request->tanggal_mulai_kerja,
            'shift'               => $request->shift,
            'status'              => $request->aktif ? 'aktif' : 'nonaktif',
        ]);

        // 3. Update reference_id di people
        $person->update(['reference_id' => $farmasi->id]);

        // 4. Simpan user
        $user = User::create([
            'person_id'      => $person->id,
            'username'       => $request->username,
            'email'          => $request->email,
            'password'       => bcrypt($request->password),
            'reference_type' => Farmasi::class,
            'reference_id'   => $farmasi->id,
        ]);

        $farmasi->update(['user_id' => $user->id]);

        // 5. Assign role farmasi
        $farmasiRole = Role::where('name', 'farmasi')->first();
        if ($farmasiRole) {
            $user->roles()->syncWithoutDetaching([$farmasiRole->id]);
        }

        return redirect()->route('farmasi.table')->with('success', 'Farmasi berhasil ditambahkan');
    }



    public function update(Request $request, $id)
    {
        $farmasi = Farmasi::with(['person', 'user'])->findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'pob'          => 'required|string|max:255',
            'dob'          => 'required|date',
            'sex'          => 'required|in:laki-laki,perempuan',
            'username'     => 'required|string|max:255|unique:users,username,' . $farmasi->user_id,
            'email'        => 'required|email|unique:users,email,' . $farmasi->user_id,
            'telepon'      => 'required|string|max:20',
            'shift'        => 'required|string|max:50',
            'aktif'        => 'required|boolean',
        ]);

        // Update person
        $farmasi->person->update([
            'name'  => $request->nama_lengkap,
            'pob'   => $request->pob,
            'dob'   => $request->dob,
            'sex'   => $request->sex,
            'phone' => $request->telepon,
        ]);

        // Update user
        $farmasi->user->update([
            'username' => $request->username,
            'email'    => $request->email,
        ]);
        if ($request->password) {
            $farmasi->user->update(['password' => Hash::make($request->password)]);
        }

        // Update farmasi
        $farmasi->update([
            'shift'  => $request->shift,
            'status' => $request->aktif ? 'aktif' : 'nonaktif',
        ]);

        return redirect()->route('farmasi.index')->with('success', 'Farmasi berhasil diperbarui');
    }

    public function show(Resep $resep)
    {
        // ambil detail resep & order items
        $detailReseps = $resep->detailReseps; // pastikan relasi detailReseps di model Resep
        $order = $resep->medicineOrder;      // relasi medicineOrder di model Resep

        return view('backend.pages.farmasi.resep.detail', compact('resep', 'detailReseps', 'order'));
    }


    public function destroy($id)
    {
        $farmasi = Farmasi::with(['person', 'user'])->findOrFail($id);

        // Hapus person jika ada
        if ($farmasi->person) {
            $farmasi->person->delete();
        }

        // Hapus user jika ada
        if ($farmasi->user) {
            $farmasi->user->delete();
        }

        // Hapus farmasi
        $farmasi->delete();

        return redirect()->route('farmasi.table')->with('success', 'Farmasi berhasil dihapus');
    }
}
