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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();

            $table->foreignId('person_id')->constrained('people')->onDelete('cascade');

            $table->string('sip');
            $table->string('spesialis');
            $table->string('no_telepon');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');

            // Bisa simpan hari-hari dipisah koma atau JSON
            $table->json('jadwal_praktek'); // contoh: ["Senin","Rabu","Jumat"]

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};
