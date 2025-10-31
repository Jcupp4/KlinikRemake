<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visit;
use App\Models\Person;

class VisitFactory extends Factory
{
    protected $model = Visit::class;

    public function definition(): array
    {
        $pasien = Person::whereHas('roles', fn($q) => $q->where('name', 'pasien'))->inRandomOrder()->first();
        $dokter = Person::whereHas('roles', fn($q) => $q->where('name', 'dokter'))->inRandomOrder()->first();

        return [
            'nomor_antrian' => str_pad($this->faker->unique()->numberBetween(1, 999), 3, '0', STR_PAD_LEFT),
            'pasien_id' => $pasien->id ?? 1,
            'dokter_id' => $dokter->id ?? 1,
            'tanggal_kunjungan' => $this->faker->date(),
            'keluhan' => $this->faker->sentence(),
            'status' => 'antri',
        ];
    }
}
