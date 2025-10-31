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
        Schema::table('medicine_transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable()->after('medicine_id');
            $table->foreign('order_id')->references('id')->on('medicine_orders')->onDelete('set null');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medicine_transactions', function (Blueprint $table) {
            //
        });
    }
};
