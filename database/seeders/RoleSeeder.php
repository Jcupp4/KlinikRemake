<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        Role::insert([
            ['id' => 3, 'name' => 'resepsionis',  'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'farmasi',      'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'name' => 'pasien', 'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
