<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
  protected $table = 'medicine_transactions';

  protected $fillable = ['medicine_id', 'type', 'quantity', 'price', 'notes'];

  public function medicine()
  {
    return $this->belongsTo(Medicine::class);
  }
}
