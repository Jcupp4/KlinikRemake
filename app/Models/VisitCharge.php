<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitCharge extends Model
{
  protected $fillable = ['visit_id', 'charge_id', 'amount', 'quantity', 'total'];

  public function visit()
  {
    return $this->belongsTo(Visit::class);
  }

  public function charge()
  {
    return $this->belongsTo(Charge::class);
  }
}
