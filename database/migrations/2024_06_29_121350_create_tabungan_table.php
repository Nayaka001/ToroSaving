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
        Schema::create('tabungan', function (Blueprint $table) {
            $table->id('id_tabungan');
            $table->char('nama', 36);
            $table->enum('kategori', ['Harian', 'Mingguan', 'Bulanan']);
            $table->bigInteger('jumlah_uang');
            $table->dateTime('tanggal_dan_waktu');
            $table->string('nama_admin');

            $table->foreign('nama')->references('id_torodir')->on('torodir')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabungan');
    }
};
