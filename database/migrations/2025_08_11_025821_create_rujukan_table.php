<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id();

            // Relasi ke pasien
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');

            // Relasi ke dokter yang merujuk
            $table->unsignedBigInteger('dokter_id');
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');

            // Data dari dokter
            $table->text('diagnosa')->nullable();
            $table->text('alasan_rujukan')->nullable();

            // Data yang dilengkapi resepsionis
            $table->string('tujuan_rujukan')->nullable();
            $table->string('alamat_tujuan')->nullable();
            $table->string('telepon_tujuan')->nullable();

            // Tanggal rujukan
            $table->date('tanggal_rujukan')->nullable();

            // Status rujukan: pending, selesai
            $table->enum('status', ['pending', 'selesai'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rujukan');
    }
};
