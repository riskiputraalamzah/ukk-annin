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
        Schema::create('tbl_mutasi_lokasi', function (Blueprint $table) {
            $table->id('id_mutasi_lokasi'); // Primary key
            $table->unsignedBigInteger('id_lokasi'); // Foreign key ke tbl_lokasi
            $table->unsignedBigInteger('id_pengadaan'); // Foreign key ke tbl_pengadaan
            $table->string('flag_lokasi', 45)->nullable(); // Kolom flag lokasi (opsional)
            $table->string('flag_pindah', 45)->nullable(); // Kolom flag pindah (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key
            $table->foreign('id_lokasi')->references('id_lokasi')->on('tbl_lokasi');
            $table->foreign('id_pengadaan')->references('id_pengadaan')->on('tbl_pengadaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mutasi_lokasi');
    }
};
