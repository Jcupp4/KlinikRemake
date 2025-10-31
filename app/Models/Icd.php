<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Icd extends Model
{
    protected $fillable = ['code', 'description'];

    public function search(Request $request)
    {
        $q = $request->get('q');
        $data = Icd::where('kode', 'like', "%$q%")
            ->orWhere('deskripsi', 'like', "%$q%")
            ->limit(20)
            ->get(['kode', 'deskripsi']);
        return response()->json($data);
    }

    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class, 'kode_icd', 'code');
    }
}
