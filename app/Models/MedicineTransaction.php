<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineTransaction extends Model
{
    protected $fillable = [
        'visit_id',
        'medicine_id',
        'order_id',
        'tanggal',
        'tipe',
        'jumlah',
        'description',
        'sumber',
    ];



    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function order()
    {
        return $this->belongsTo(MedicineOrders::class, 'order_id');
    }

    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
