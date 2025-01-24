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
        Schema::create('tbl_pengadaan', function (Blueprint $table) {
            $table->id('id_pengadaan'); // Primary key
            $table->unsignedBigInteger('id_master_barang'); // Foreign key ke tbl_master_barang
            $table->unsignedBigInteger('id_depresiasi')->nullable(); // Foreign key ke tbl_depresiasi (opsional)
            $table->unsignedBigInteger('id_merk')->nullable(); // Foreign key ke tbl_merk (opsional)
            $table->unsignedBigInteger('id_satuan')->nullable(); // Foreign key ke tbl_satuan (opsional)
            $table->unsignedBigInteger('id_sub_kategori_asset')->nullable(); // Foreign key ke tbl_sub_kategori_asset (opsional)
            $table->unsignedBigInteger('id_distributor')->nullable(); // Foreign key ke tbl_distributor (opsional)
            $table->string('kode_pengadaan', 20); // Kolom kode pengadaan
            $table->string('no_invoice', 20)->nullable(); // Kolom nomor invoice (opsional)
            $table->string('no_seri_barang', 50)->nullable(); // Kolom nomor seri barang (opsional)
            $table->string('tahun_produksi', 5)->nullable(); // Kolom tahun produksi (opsional)
            $table->date('tgl_pengadaan')->nullable(); // Kolom tanggal pengadaan (opsional)
            $table->integer('harga_barang')->nullable(); // Kolom harga barang (opsional)
            $table->integer('nilai_barang')->nullable(); // Kolom nilai barang (opsional)
            $table->enum('fb', ['0', '1'])->nullable(); // Kolom FB (opsional)
            $table->string('keterangan', 50)->nullable(); // Kolom keterangan (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key
            $table->foreign('id_master_barang')->references('id_barang')->on('tbl_master_barang');
            $table->foreign('id_depresiasi')->references('id_depresiasi')->on('tbl_depresiasi');
            $table->foreign('id_merk')->references('id_merk')->on('tbl_merk');
            $table->foreign('id_satuan')->references('id_satuan')->on('tbl_satuan');
            $table->foreign('id_sub_kategori_asset')->references('id_sub_kategori_asset')->on('tbl_sub_kategori_asset');
            $table->foreign('id_distributor')->references('id_distributor')->on('tbl_distributor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pengadaan');
    }
};
