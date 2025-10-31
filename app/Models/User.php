<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * Kolom yang boleh diisi massal
     */
    protected $fillable = [
        'person_id',
        'username',
        'email',
        'password',
        'reference_type',
        'reference_id',
    ];

    /**
     * Kolom yang disembunyikan saat serialisasi (API/json)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Konversi otomatis tipe data
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi: morph ke Dokter / Pasien / Admin
     */
    public function reference()
    {
        return $this->morphTo();
    }

    /**
     * Relasi: many-to-many ke roles via role_user
     */

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    
}
