<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepItem extends Model
{
    protected $fillable = ['resep_id','medicine_id','jumlah','aturan_pakai','harga'];

    public function resep()
    {
        return $this->belongsTo(Resep::class);
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
