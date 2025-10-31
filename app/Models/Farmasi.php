<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Farmasi extends Model
{
    use HasFactory;

    protected $table = 'farmasi'; // Pakai nama tabel custom

    protected $fillable = [
        'person_id',
        'user_id',
        'nip',
        'pendidikan_terakhir',
        'status_kepegawaian',
        'tanggal_mulai_kerja',
        'shift',
        'status',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id'); // foreign key di tabel dokter
    }

    public function user()
    {
        return $this->morphOne(User::class, 'reference');
    }
}
