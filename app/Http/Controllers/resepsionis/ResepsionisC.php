<?php

namespace App\Http\Controllers\resepsionis;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Resepsionis;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class ResepsionisC extends Controller
{
    public function index()
    {
        $resepsionis = Resepsionis::with('person')->get();
        return view('backend.pages.people.resepsionis.table', compact('resepsionis'));
    }

    public function view($id)
    {
        $res = Resepsionis::with(['person', 'user'])->findOrFail($id);
        return view('backend.pages.people.resepsionis.view', compact('res'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'pob'          => 'required|string',
            'dob'          => 'required|date',
            'sex'          => 'required|in:laki-laki,perempuan',
            'username'     => 'required|unique:users,username',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:6',
            'alamat'       => 'required|string',
            'shift'        => 'required|in:pagi,siang,malam',
            'status'       => 'required|in:aktif,nonaktif',
        ]);

        // 1. Simpan data ke tabel people
        $person = Person::create([
            'name'           => $request->nama_lengkap,
            'pob'            => $request->pob,
            'dob'            => $request->dob,
            'sex'            => $request->sex,
            'reference_type' => Resepsionis::class,
            'reference_id'   => 0,
        ]);

        // 2. Simpan data ke tabel resepsionis
        $resepsionis = Resepsionis::create([
            'person_id'  => $person->id,
            'alamat'     => $request->alamat,
            'shift'      => $request->shift,
            'no_telepon' => $request->no_telepon,
            'status'     => $request->status,
        ]);

        // 3. Update reference_id di people
        $person->update(['reference_id' => $resepsionis->id]);

        // 4. Simpan data ke tabel users
        $user = User::create([
            'person_id'      => $person->id,
            'username'       => $request->username,
            'email'          => $request->email,
            'password'       => bcrypt($request->password),
            'reference_type' => Resepsionis::class,
            'reference_id'   => $resepsionis->id,
        ]);

        // 5. Assign role resepsionis dari tabel roles
        $resepsionisRole = Role::where('name', 'resepsionis')->first();
        if ($resepsionisRole) {
            $user->roles()->syncWithoutDetaching([$resepsionisRole->id]);
        }

        return redirect()->route('resepsionis.table')->with('success', 'Data resepsionis berhasil ditambahkan');
    }


    // ==================== UPDATE ====================
    public function update(Request $request, $id)
    {
        $res = Resepsionis::with(['person', 'user'])->findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'pob' => 'nullable|string',
            'dob' => 'nullable|date',
            'sex' => 'nullable|in:laki-laki,perempuan',
            'email' => 'nullable|email|unique:users,email,' . $res->user->id,
            'alamat' => 'nullable|string',
            'no_telepon' => 'nullable|string',
            'shift' => 'nullable|in:pagi,siang,malam',
            'status' => 'nullable|in:aktif,nonaktif',
        ]);

        // Update person
        $res->person->update([
            'name' => $request->name,
        ]);

        // Update resepsionis
        $res->update([
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'shift' => $request->shift,
            'status' => $request->status,
        ]);

        // Update user email jika ada
        if ($request->email) {
            $res->user->update([
                'email' => $request->email,
            ]);
        }

        return redirect()->route('resepsionis.view', $id)->with('success', 'Data resepsionis berhasil diperbarui');
    }

    // ==================== DELETE ====================
    public function delete($id)
    {
        $res = Resepsionis::with(['person', 'user'])->findOrFail($id);

        // Hapus user
        if ($res->user) {
            $res->user->roles()->detach(); // detach role
            $res->user->delete();
        }

        // Hapus person
        if ($res->person) {
            $res->person->delete();
        }

        // Hapus resepsionis
        $res->delete();

        return redirect()->route('resepsionis.table')->with('success', 'Data resepsionis berhasil dihapus');
    }
}
