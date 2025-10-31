<?php

namespace App\Services;

use App\Models\Medicine;
use App\Models\Resep;
use App\Models\MedicineOrderItems;
use App\Models\MedicineOrders;
use App\Models\MedicineTransaction;
use Illuminate\Support\Facades\DB;

class ResepService
{
    /**
     * Buat resep baru (dokter)
     */
    public function createResep($data)
    {
        if (empty($data['medicine_id']) || !is_array($data['medicine_id'])) {
            throw new \Exception("Daftar obat tidak boleh kosong.");
        }

        return DB::transaction(function () use ($data) {
            $order = MedicineOrders::create([
                'visit_id'  => $data['visit_id'] ?? null,
                'pasien_id' => $data['pasien_id'],
                'dokter_id' => $data['dokter_id'],
                'status'    => 'pending',
                'catatan'   => $data['catatan'] ?? null,
            ]);

            foreach ($data['medicine_id'] as $i => $medicine_id) {
                // 🔹 Ambil data obat dari tabel medicines
                $medicine = Medicine::find($medicine_id);

                if (!$medicine) {
                    throw new \Exception("Obat dengan ID {$medicine_id} tidak ditemukan.");
                }

                MedicineOrderItems::create([
                    'order_id'     => $order->id,
                    'medicine_id'  => $medicine_id,
                    'dosis'        => $data['dosis'][$i] ?? '-',
                    'qty'          => $data['jumlah'][$i] ?? 1,
                    'aturan_pakai' => $data['aturan_pakai'][$i] ?? '-',
                    // 🔹 Ambil harga dari tabel medicine (pastikan kolomnya sesuai)
                    'harga'        => $medicine->harga_jual ?? $medicine->harga ?? 0,
                ]);
            }

            return $order;
        });
    }




    /**
     * Proses resep (farmasi) → stok berkurang & transaksi tercatat
     */
    public function processResep($resepId)
    {
        return DB::transaction(function () use ($resepId) {
            $resep = Resep::with(['items.medicine'])->findOrFail($resepId);

            foreach ($resep->items as $item) {
                $medicine = $item->medicine;

                if (!$medicine) {
                    throw new \Exception("Obat dengan ID {$item->medicine_id} tidak ditemukan.");
                }

                if ($medicine->stok < $item->jumlah) {
                    throw new \Exception("Stok {$medicine->name} tidak mencukupi");
                }

                // Catat transaksi OUT
                MedicineTransaction::create([
                    'medicine_id' => $item->medicine_id,
                    'tanggal'     => now(),
                    'tipe'        => 'OUT',
                    'jumlah'      => $item->jumlah,
                    'sumber'      => 'Resep ID: ' . $resep->id,
                    'keterangan'  => "Obat untuk pasien {$resep->pasien->nama}"
                ]);

                // Kurangi stok
                $medicine->decrement('stok', $item->jumlah);
            }

            // Update status resep
            $resep->update(['status' => 'completed']);

            return $resep;
        });
    }
}
