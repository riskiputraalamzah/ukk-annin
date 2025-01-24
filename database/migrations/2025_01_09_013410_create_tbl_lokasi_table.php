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
        Schema::create('tbl_lokasi', function (Blueprint $table) {
            $table->id('id_lokasi'); // Primary key
            $table->string('kode_lokasi', 20); // Kolom kode lokasi
            $table->string('nama_lokasi', 25); // Kolom nama lokasi
            $table->string('keterangan', 50)->nullable(); // Kolom keterangan (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lokasi');
    }
};
