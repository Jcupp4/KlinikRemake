<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = ['visit_id', 'subtotal', 'tax', 'discount', 'total', 'status'];

  public function visit()
  {
    return $this->belongsTo(Visit::class);
  }
}
