<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->bigInteger('kode_produk')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_produk', 100);
            $table->string('merk', 100);
            $table->integer('stok')->unsigned();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('produk');
        Schema::enableForeignKeyConstraints();
    }
}
