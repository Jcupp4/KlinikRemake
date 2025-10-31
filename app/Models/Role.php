<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    /**
     * Konstanta ID Role
     */
    public const ADMIN  = 1;
    public const DOKTER = 2;
    public const RESEPSIONIS = 3;
    public const FARMASI = 4;
    public const PASIEN = 5;

    protected $fillable = [
        'name',
        'guard_name',
    ];

    /**
     * Relasi ke User (many-to-many)
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}
