<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('rujukan', function (Blueprint $table) {
            // tambahkan kolom visit_id jika belum ada
            if (!Schema::hasColumn('rujukan', 'visit_id')) {
                $table->foreignId('visit_id')
                      ->nullable()
                      ->constrained('visits')
                      ->onDelete('cascade')
                      ->after('id');
            }
        });
    }

    public function down()
    {
        Schema::table('rujukan', function (Blueprint $table) {
            $table->dropConstrainedForeignId('visit_id');
        });
    }
};
