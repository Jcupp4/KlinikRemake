<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;

class RujukanC extends Controller
{
    public function index()
    {
        $rujukan = Rujukan::with([
            'pasien.person',
            'dokter.person',
            'rumahSakit'
        ])->get();

        return view('backend.pages.rujukan.table', compact('rujukan'));
    }
}
