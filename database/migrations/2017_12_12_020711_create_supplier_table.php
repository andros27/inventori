<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id_supplier');
            $table->string('nama_supplier');
            $table->text('alamat_kantor');
            $table->string('no_telp',12);
            $table->string('email')->unique();
            $table->integer('kota_id')->unsigned();
            $table->integer('provinsi_id')->unsigned();
            $table->timestamps();

            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kota_id')->references('id_kota')->on('kota')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('supplier');
        Schema::enableForeignKeyConstraints();
    }
}
