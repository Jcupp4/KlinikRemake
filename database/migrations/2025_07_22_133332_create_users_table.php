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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Relasi ke people
            $table->foreignId('person_id')->constrained('people')->onDelete('cascade');

            // Info login
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');

            // Polymorphic reference
            $table->string('reference_type'); // Nama model, contoh: App\Models\Dokter
            $table->unsignedBigInteger('reference_id'); // ID dari model tersebut

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
