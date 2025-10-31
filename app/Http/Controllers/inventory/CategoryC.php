<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\MedicineCategory;
use Illuminate\Http\Request;

class CategoryC extends Controller
{
  public function index()
  {
    $categories = MedicineCategory::all();
    return view('backend.pages.inventory.categories.table', compact('categories'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'name'        => 'required|string|max:255',
      'deskripsi' => 'nullable|string',
    ]);

    MedicineCategory::create($request->only(['name', 'deskripsi']));

    return redirect()->route('category.table')
      ->with('success', 'Kategori berhasil ditambahkan!');
  }

  public function update(Request $request, MedicineCategory $category)
  {
    $request->validate([
      'name'        => 'required|string|max:255',
      'deskripsi' => 'nullable|string',
    ]);

    $category->update($request->only(['name', 'deskripsi']));

    return redirect()->route('category.table')
      ->with('success', 'Kategori berhasil diperbarui!');
  }

  public function destroy(MedicineCategory $category)
  {
    $category->delete();

    return redirect()->route('category.table')
      ->with('success', 'Kategori berhasil dihapus!');
  }
}
