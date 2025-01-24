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
        Schema::create('tbl_opname', function (Blueprint $table) {
            $table->id('id_opname'); // Primary key
            $table->unsignedBigInteger('id_pengadaan'); // Foreign key ke tbl_pengadaan
            $table->date('tgl_opname'); // Kolom tanggal opname
            $table->string('kondisi', 25)->nullable(); // Kolom kondisi (opsional)
            $table->string('keterangan', 100)->nullable(); // Kolom keterangan (opsional)
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
        Schema::dropIfExists('tbl_opname');
    }
};
