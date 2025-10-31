<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('medicine_orders', function (Blueprint $table) {
            $table->string('status', 20)->change(); // ganti panjang jadi 20
        });
    }

    public function down()
    {
        Schema::table('medicine_orders', function (Blueprint $table) {
            $table->string('status', 7)->change(); // kembali ke panjang semula
        });
    }
};
