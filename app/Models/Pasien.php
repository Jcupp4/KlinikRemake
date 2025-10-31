<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'person_id',
        'no_rm',
        'alamat',
        'kontak_darurat',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    // ➕ Tambahkan relasi ini
    public function visits()
    {
        return $this->hasMany(Visit::class, 'pasien_id');
        // Pastikan kolom foreign key di tabel visits namanya pasien_id
    }

    public function resep()
    {
        return $this->hasMany(Resep::class, 'pasien_id');
    }

    public function medicineOrders()
    {
        return $this->hasMany(MedicineOrders::class, 'pasien_id');
    }
}
