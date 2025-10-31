<?php

// app/Http/Controllers/IcdController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Icd;

class IcdC extends Controller
{
    public function searchICD(Request $request)
    {
        $term = $request->term ?? '';

        $icds = Icd::where('code', 'like', "%$term%")
            ->orWhere('description', 'like', "%$term%")
            ->limit(50)
            ->get();

        $results = $icds->map(fn($icd) => [
            'id' => $icd->id,
            'text' => $icd->code . ' - ' . $icd->description
        ]);

        return response()->json(['results' => $results]);
    }



    public function index()
    {
        $icds = \App\Models\Icd::orderBy('code')->paginate(25); // 25 per halaman
        return view('backend.pages.icd.form', compact('icds'));
    }


    public function importFromCdcTxt()
    {
        $filePath = storage_path('app/icd10cm_codes_2019.txt');

        if (!file_exists($filePath)) {
            return response('File tidak ditemukan.', 404);
        }

        $handle = fopen($filePath, 'r');
        if (!$handle) {
            return response('Gagal membuka file.', 500);
        }

        $count = 0;
        while (($line = fgets($handle)) !== false) {
            $parts = preg_split('/\s+/', trim($line), 2); // pisah tab/spasi

            if (count($parts) < 2) {
                continue; // skip baris rusak
            }

            [$code, $description] = $parts;

            \App\Models\Icd::updateOrCreate(
                ['code' => $code],
                ['description' => $description]
            );

            $count++;
        }

        fclose($handle);

        return "✅ Import selesai: $count kode ICD-10 diproses.";
    }
}
