<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep'; // 👈 sesuaikan dengan nama tabel di database
    protected $fillable = [
        'visit_id',
        'pasien_id',
        'dokter_id',
        'catatan',
        'status',
        'tanggal',
    ];

    public function items()
    {
        return $this->hasMany(ResepItem::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }
}
