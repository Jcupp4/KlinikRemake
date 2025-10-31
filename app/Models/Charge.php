<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
  protected $fillable = ['name', 'type', 'amount', 'is_active'];

  public function visitCharges()
  {
    return $this->hasMany(VisitCharge::class);
  }
}
