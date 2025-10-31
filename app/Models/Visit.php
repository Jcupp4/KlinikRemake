<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $table = 'visits'; // atau nama tabel kamu

    protected $fillable = [
        'nomor_antrian',
        'pasien_id',
        'dokter_id',
        'tanggal_kunjungan',
        'keluhan',
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

    public function diagnosa()
    {
        return $this->hasOne(Diagnosa::class, 'visit_id');
    }

    public function charges()
    {
        return $this->hasMany(VisitCharge::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function rujukan()
    {
        return $this->hasOne(Rujukan::class, 'visit_id');
    }
}
