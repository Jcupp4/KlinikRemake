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
        Schema::table('medicine_order_items', function (Blueprint $table) {
            $table->decimal('harga', 15, 2)->nullable()->after('qty');
        });
    }

    public function down(): void
    {
        Schema::table('medicine_order_items', function (Blueprint $table) {
            $table->dropColumn('harga');
        });
    }
};
