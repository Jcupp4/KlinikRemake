<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['category_id','name','deskripsi','satuan','harga','stok'];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'category_id');
    }

    public function transactions()
    {
        return $this->hasMany(MedicineTransaction::class, 'medicine_id');
    }
}