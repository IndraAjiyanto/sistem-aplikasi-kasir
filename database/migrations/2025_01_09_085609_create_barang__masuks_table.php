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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->string('kode_barang_masuk', 20)->primary();
            $table->foreignId('kode_barang');
            $table->foreignId('id_pengguna');
            $table->foreignId('id_pemasok');
            $table->integer('jumlah_masuk');
            $table->date('tanggal_masuk');
            $table->integer('harga_beli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang__masuks');
    }
};
