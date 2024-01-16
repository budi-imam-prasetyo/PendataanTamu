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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->integer('NIP');
            $table->string('nama');
            $table->string('telp')->unique();
            $table->string('email')->unique();
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_lahir');
            $table->enum('status', ['PNS', 'Guru Honor Sekolah']);
            $table->string('PTK');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_user');
    }
};
