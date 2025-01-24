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
        Schema::create('tbl_hitung_depresiasi', function (Blueprint $table) {
            $table->id('id_hitung_depresiasi'); // Primary key
            $table->unsignedBigInteger('id_pengadaan'); // Foreign key ke tbl_pengadaan
            $table->date('tgl_hitung_depresiasi'); // Kolom tanggal hitung depresiasi
            $table->string('bulan', 10)->nullable(); // Kolom bulan (opsional)
            $table->integer('durasi')->nullable(); // Kolom durasi (opsional)
            $table->integer('nilai_barang')->nullable(); // Kolom nilai barang (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key
            $table->foreign('id_pengadaan')->references('id_pengadaan')->on('tbl_pengadaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_hitung_depresiasi');
    }
};
