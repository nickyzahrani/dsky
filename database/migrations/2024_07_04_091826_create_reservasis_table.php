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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_meja');
            $table->unsignedBigInteger('id_paket');
            $table->date('tanggal');
            $table->time('waktu');
            $table->integer('lama_main'); // Dalam jam
            $table->integer('harga_total'); // Harga total reservasi
            $table->timestamps();
            
            // Foreign key constraints
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_meja')->references('id')->on('meja')->onDelete('cascade');
            $table->foreign('id_paket')->references('id')->on('paket')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};