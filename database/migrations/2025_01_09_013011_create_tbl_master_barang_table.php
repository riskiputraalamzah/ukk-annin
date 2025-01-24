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
        Schema::create('tbl_master_barang', function (Blueprint $table) {
            $table->id('id_barang'); // Primary key
            $table->string('kode_barang', 20); // Kolom kode barang (required)
            $table->string('nama_barang', 100)->nullable(); // Kolom nama barang (optional)
            $table->string('spesifikasi_teknis', 100)->nullable(); // Kolom spesifikasi teknis (optional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_master_barang');
    }
};
