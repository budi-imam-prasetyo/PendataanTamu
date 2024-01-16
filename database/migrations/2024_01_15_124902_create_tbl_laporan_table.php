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
        Schema::create('tbl_laporan', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_pertemuan')->references('id')->on('tbl_pertemuan')->onDelete('cascade');
            $table->text('hasil_pertemuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_laporan');
    }
};
