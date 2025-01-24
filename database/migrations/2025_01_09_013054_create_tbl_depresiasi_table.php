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
        Schema::create('tbl_depresiasi', function (Blueprint $table) {
            $table->id('id_depresiasi'); // Primary key
            $table->integer('lama_depresiasi'); // Kolom lama depresiasi (required)
            $table->string('keterangan', 50)->nullable(); // Kolom keterangan (optional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_depresiasi');
    }
};
