<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nomor_resp');
            $table->date('Tanggal_resp');
            $table->bigInteger('Kode_dktr')->unsigned();
            $table->foreign('Kode_dktr')->references('id')->on('reseps');
            $table->bigInteger('Kode_psien')->unsigned();
            $table->foreign('Kode_psien')->references('id')->on('reseps');
            $table->bigInteger('Kode_plklinik')->unsigned();
            $table->foreign('Kode_plklinik')->references('id')->on('reseps');
            $table->bigInteger('Total_harga');
            $table->string('Bayar');
            $table->string('Kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
}
