<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\MedicineTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsC extends Controller
{
    public function index()
    {
        // Ambil semua transaksi lengkap
        $transactions = MedicineTransaction::with([
            'order.visit.pasien.person',
            'medicine'
        ])
            ->latest()
            ->get();

        // Kelompokkan transaksi berdasarkan order_id (khusus resep dokter)
        $groupedTransactions = $transactions->groupBy(function ($trx) {
            // Jika sumber dari resep dokter, group per order_id
            return $trx->sumber === 'ResepDokter' ? $trx->order_id : 'LAINNYA_' . $trx->id;
        });

        $medicines = Medicine::all();

        return view('backend.pages.inventory.transactions.table', compact('transactions', 'groupedTransactions', 'medicines'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:medicines,id',
            'tipe'        => 'required|in:IN,OUT',
            'jumlah'      => 'required|integer|min:1',
            'tanggal'     => 'required|date',
            'sumber'      => 'nullable|string|max:100',
            'keterangan'  => 'nullable|string',
        ]);

        // Simpan transaksi
        $trx = MedicineTransaction::create($request->all());

        // Update stok obat
        $medicine = Medicine::find($request->medicine_id);
        if ($request->tipe === 'IN') {
            $medicine->increment('stok', $request->jumlah);
        } else {
            $medicine->decrement('stok', $request->jumlah);
        }

        return redirect()->route('transactions.table')->with('success', 'Transaksi berhasil dicatat!');
    }
}
