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
        Schema::create('tbl_kategori_asset', function (Blueprint $table) {
            $table->id('id_kategori_asset'); // ID sebagai primary key
            $table->string('kode_kategori_asset', 20); // Kolom kode kategori asset
            $table->string('kategori_asset', 25)->nullable(); // Kolom kategori asset (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kategori_asset');
    }
};
