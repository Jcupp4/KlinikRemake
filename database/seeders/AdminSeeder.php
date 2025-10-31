<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Person;
use App\Models\User;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Tambah data person
        $person = Person::create([
            'name' => 'Super Admin', // ✅ ini kolom yang benar
            'pob' => 'Bandung',
            'dob' => '1990-01-01',
            'sex' => 'laki-laki',
        ]);

        // Tambah role admin jika belum ada
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Tambah user login
        $user = User::create([
            'person_id' => $person->id,
            'username' => 'admin',
            'email' => 'admin@klinik.com',
            'password' => Hash::make('password'), // password: password
            'reference_type' => 'admin', // bisa kamu ganti kalau nanti ada model Admin
            'reference_id' => 0, // karena belum menunjuk ke tabel manapun
        ]);

        // Assign role admin ke user
        $user->roles()->attach($role->id);
    }
}
