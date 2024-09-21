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
        Schema::table('bukutamus', function (Blueprint $table) {
            $table->foreign('dinas')->references('id')->on('dinass')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('personil')->references('id')->on('personils')->onUpdate('cascade')->onDelete('cascade');
        });                                                                 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bukutamus', function (Blueprint $table) {
            //
        });
    }
};
