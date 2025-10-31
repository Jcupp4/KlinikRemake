<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('medicine_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicine_id')->constrained('medicines')->cascadeOnDelete();
            $table->enum('type', ['in', 'out']); // masuk atau keluar
            $table->integer('quantity');
            $table->text('note')->nullable();
            $table->foreignId('related_patient_id')->nullable()->constrained('pasien')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicine_transactions');
    }
};
