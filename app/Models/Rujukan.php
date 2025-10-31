<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    protected $table = 'rujukan';

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'diagnosa',
        'alasan_rujukan',   // ← tambahin ini
        'tujuan_rujukan',
        'alamat_tujuan',
        'telepon_tujuan',
        'tanggal_rujukan',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class, 'tujuan_rujukan', 'id');
    }

    public function rujukan()
    {
        return $this->hasOne(Rujukan::class, 'visit_id');
    }
}
