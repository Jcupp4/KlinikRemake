<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineOrders extends Model
{
  protected $fillable = [
    'visit_id',
    'pasien_id',
    'dokter_id',
    'farmasi_id',
    'status',
    'catatan'
  ];

  public function items()
  {
    return $this->hasMany(MedicineOrderItems::class, 'order_id');
  }

  public function pasien()
  {
    return $this->belongsTo(Pasien::class, 'pasien_id');
  }

  public function dokter()
  {
    return $this->belongsTo(User::class, 'dokter_id');
  }

  public function farmasi()
  {
    return $this->belongsTo(User::class, 'farmasi_id');
  }

  public function visit()
  {
    return $this->belongsTo(Visit::class, 'visit_id');
  }
}
