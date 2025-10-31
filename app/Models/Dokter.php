<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'sip',
        'spesialis',
        'no_telepon',
        'status',
        'jadwal_praktek',
        'person_id',
    ];

    protected $casts = [
        'jadwal_praktek' => 'array',
    ];


    public function user()
    {
        return $this->morphOne(User::class, 'reference');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id'); // foreign key di tabel dokter
    }

    // ➕ Tambahkan relasi ini
    public function visits()
    {
        return $this->hasMany(Visit::class, 'pasien_id');
        // Pastikan kolom foreign key di tabel visits namanya pasien_id
    }
}
