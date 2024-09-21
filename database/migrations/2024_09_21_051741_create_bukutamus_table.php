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
        Schema::create('bukutamus', function (Blueprint $table) {
            $table->id();
            $table->string('foto',200);
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->string('wa',100);
            $table->unsignedBigInteger('dinas');
            $table->unsignedBigInteger('personil');                            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukutamus');
    }
};
