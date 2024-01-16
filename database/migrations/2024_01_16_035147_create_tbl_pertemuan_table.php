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
            $table->foreign('id_tamu')->reference('id')->on('tbl_tamu')-onDelete('cascade');
            $table->foreign('id_detail')->reference('id')->on('detail_user')-onDelete('cascade');
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
        Schema::dropIfExists('tbl_pertemuan');
    }
};
