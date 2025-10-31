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
        Schema::table('diagnosa', function (Blueprint $table) {
            $table->unsignedBigInteger('visit_id')->after('id');

            // opsional: buat foreign key
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('diagnosa', function (Blueprint $table) {
            $table->dropForeign(['visit_id']);
            $table->dropColumn('visit_id');
        });
    }
};
