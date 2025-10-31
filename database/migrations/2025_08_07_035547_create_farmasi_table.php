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
        Schema::create('farmasi', function (Blueprint $table) {
            $table->id();

            // Foreign key ke people
            $table->foreignId('person_id')->constrained('people')->onDelete('cascade');

            // Data farmasi spesifik
            $table->string('nip')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('status_kepegawaian')->nullable();
            $table->date('tanggal_mulai_kerja')->nullable();
            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farmasi');
    }
};
