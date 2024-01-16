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
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tamu');
            $table->unsignedBigInteger('id_detail');
            $table->dateTime('tanggal_waktu');
            $table->text('tujuan');
            $table->string('status');
            $table->foreign('id_tamu')->references('id')->on('tamu')->onDelete('cascade');
            $table->foreign('id_detail')->references('id')->on('detail_user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertemuan');
    }
};
