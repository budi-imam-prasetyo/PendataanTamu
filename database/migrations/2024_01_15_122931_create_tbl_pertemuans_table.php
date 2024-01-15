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
        Schema::create('tbl_pertemuans', function (Blueprint $table) {
            $table->id();
            $table->int('id_tamu');
            $table->int('id_guru');
            $table->datetime('tanggal_waktu');
            $table->string('tujuan');
            $table->enum('status', ['diizinkan', 'belum diizinkan'])->default('belum dizinkan');
            $table->timestamps();
        });
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pertemuans');
    }
};
