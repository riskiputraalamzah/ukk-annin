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
        Schema::create('tbl_merk', function (Blueprint $table) {
            $table->id('id_merk'); // Primary key
            $table->string('merk', 50)->nullable(); // Kolom merk (opsional)
            $table->string('keterangan', 50)->nullable(); // Kolom keterangan (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_merk');
    }
};
