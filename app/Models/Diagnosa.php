<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosa';

    protected $fillable = [
        'dokter_id',
        'kode_icd',
        'deskripsi',
        'alasan_rujukan',
        'status_rujukan',
        'rujukan_id'
    ];


    public function rujukan()
    {
        return $this->belongsTo(Rujukan::class);
    }

    public function visits()
    {
        return $this->belongsTo(Visit::class, 'visit_id');
    }


    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function icd()
    {
        return $this->belongsTo(Icd::class, 'kode_icd', 'code');
    }

    public function visitCharges()
    {
        return $this->hasMany(VisitCharge::class, 'visit_id', 'visit_id');
    }

    public function payments()
    {
        return $this->hasManyThrough(
            Payment::class,
            Visit::class,
            'id',         // visits.id
            'visit_id',   // payments.visit_id
            'visit_id',   // diagnosa.visit_id
            'id'
        );
    }
}
