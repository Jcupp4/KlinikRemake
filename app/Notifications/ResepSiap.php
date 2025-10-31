<?php

namespace App\Notifications;

use App\Models\MedicineOrders;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class ResepSiap extends Notification
{
    use Queueable;

    public $order;

    public function __construct(MedicineOrders $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => "Resep pasien {$this->order->pasien->person->name} telah dikirim oleh dokter {$this->order->dokter->person->name}.",
            'resep_id' => $this->order->id,
            'order_id' => $this->order->id, // tambahkan biar bisa dicocokkan waktu delete
            'status' => $this->order->status ?? 'pending', // ✅ penting untuk filter JS
            'type' => 'info', // bisa digunakan buat warna icon (info/success/warning/danger)
            'url' => route('farmasi.resep.detail', $this->order->id),
        ];
    }
}
