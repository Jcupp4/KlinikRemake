<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('diagnosa', function (Blueprint $table) {
            // Alasan rujukan (opsional)
            $table->text('alasan_rujukan')->nullable()->after('deskripsi');

            // Status rujukan: tidak / dirujuk
            $table->enum('status_rujukan', ['tidak', 'dirujuk'])->default('tidak')->after('alasan_rujukan');

            // Relasi ke tabel rujukan (opsional)
            $table->unsignedBigInteger('rujukan_id')->nullable()->after('status_rujukan');
            $table->foreign('rujukan_id')->references('id')->on('rujukan')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('diagnosa', function (Blueprint $table) {
            $table->dropForeign(['rujukan_id']);
            $table->dropColumn(['alasan_rujukan', 'status_rujukan', 'rujukan_id']);
        });
    }
};
