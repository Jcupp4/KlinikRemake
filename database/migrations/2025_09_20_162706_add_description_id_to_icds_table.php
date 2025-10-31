<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('icds', function (Blueprint $table) {
            $table->text('description_id')->nullable()->after('description')->comment('Deskripsi ICD-10 versi Bahasa Indonesia');
        });
    }

    public function down(): void
    {
        Schema::table('icds', function (Blueprint $table) {
            $table->dropColumn('description_id');
        });
    }
};
