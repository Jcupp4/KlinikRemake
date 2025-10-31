
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_antrian', 5);
            $table->foreignId('pasien_id')->constrained('people')->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained('people')->onDelete('cascade');
            $table->date('tanggal_kunjungan');
            $table->text('keluhan')->nullable();
            $table->enum('status', ['antri','selesai','rujuk'])->default('antri');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
