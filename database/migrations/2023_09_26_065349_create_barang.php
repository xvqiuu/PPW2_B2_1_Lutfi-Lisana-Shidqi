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
        Schema::create('barang', function (Blueprint $table) {
            $table->increments("id_barang");
            $table->string("nama_barang");
            $table->integer("harga");
            $table->integer("stok");
            $table->unsignedBigInteger('id_suplier');
            $table->foreign('id_suplier')->references('id')->on('suplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
