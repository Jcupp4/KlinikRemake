<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id();

            // foreign key ke tabel visits
            $table->foreignId('visit_id')->constrained('visits')->onDelete('cascade');

            // foreign key ke tabel dokters (cek lagi nama tabelnya)
            $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');

            $table->string('kode_icd');   // Misal: A09
            $table->text('deskripsi');    // Penjelasan dari kode atau diagnosa

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosa');
    }
};
