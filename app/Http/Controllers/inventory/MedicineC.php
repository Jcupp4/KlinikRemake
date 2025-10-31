<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\MedicineCategory;
use Illuminate\Http\Request;

class MedicineC extends Controller
{
    public function index()
    {
        $medicines = Medicine::with('category')->get();
        $categories = MedicineCategory::all();
        return view('backend.pages.inventory.medicines.table', compact('medicines', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:medicine_categories,id',
            'name'   => 'required|string|max:255',
            'satuan'      => 'required|string|max:50',
            'stok'        => 'nullable|integer|min:0',
            'harga'       => 'nullable|numeric',
            'deskripsi'   => 'nullable|string',
        ]);

        Medicine::create($request->only([
            'category_id',
            'name',
            'deskripsi',
            'satuan',
            'harga',
            'stok'
        ]));

        return redirect()->route('medicine.table')
            ->with('success', 'Obat berhasil ditambahkan!');
    }

    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'category_id' => 'required|exists:medicine_categories,id',
            'name'   => 'required|string|max:255',
            'satuan'      => 'required|string|max:50',
            'stok'        => 'nullable|integer|min:0',
            'harga'       => 'nullable|numeric',
            'deskripsi'   => 'nullable|string',
        ]);

        $medicine->update($request->only([
            'category_id',
            'name',
            'deskripsi',
            'satuan',
            'harga',
            'stok'
        ]));

        return redirect()->route('medicine.table')
            ->with('success', 'Obat berhasil diperbarui!');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('medicine.table')
            ->with('success', 'Obat berhasil dihapus!');
    }
}
