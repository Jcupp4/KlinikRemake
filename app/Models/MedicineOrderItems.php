<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineOrderItems extends Model
{
    protected $fillable = [
        'order_id','medicine_id','dosis','qty','aturan_pakai','harga'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class,  'medicine_id');
    }

    public function order()
    {
        return $this->belongsTo(MedicineOrders::class, 'order_id');
    }
}
