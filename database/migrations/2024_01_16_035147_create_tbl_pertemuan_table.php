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
        Schema::create('tbl_pertemuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tamu');
            $table->unsignedBigInteger('id_detail');
            $table->datetime('tanggal_waktu');
            $table->string('tujuan');
            $table->enum('status', ['diizinkan', 'belum diizinkan'])->default('belum diizinkan');
            $table->timestamps();
            $table->foreign('id_tamu')->references('id')->on('tbl_tamu');
            $table->foreign('id_detail')->references('id')->on('detail_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pertemuan');
    }
};