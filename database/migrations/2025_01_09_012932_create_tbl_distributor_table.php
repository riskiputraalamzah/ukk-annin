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
        Schema::create('tbl_distributor', function (Blueprint $table) {
            $table->id('id_distributor'); // Primary key
            $table->string('nama_distributor', 50); // Nama distributor (required)
            $table->string('alamat', 50)->nullable(); // Alamat (optional)
            $table->string('no_telp', 15)->nullable(); // Nomor telepon (optional)
            $table->string('email', 30)->nullable(); // Email (optional)
            $table->string('keterangan', 45)->nullable(); // Keterangan (optional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_distributor');
    }
};
