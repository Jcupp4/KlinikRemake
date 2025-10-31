<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resepsionis extends Model
{
    use HasFactory;

    protected $table = 'resepsionis';

    protected $fillable = [
        'person_id',
        'no_telepon',
        'alamat',
        'shift',
        'status',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'reference');
    }
}
