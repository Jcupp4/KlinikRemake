<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people'; // pastikan pakai nama tabel yang benar

    protected $fillable = [
        'name',
        'sex',
        'dob',
        'pob',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'person_id');
    }

    public function personable()
    {
        return $this->morphTo();
    }
}
