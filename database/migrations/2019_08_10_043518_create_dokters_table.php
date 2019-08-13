<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Kode_dktr')->unsigned();
            $table->foreign('Kode_dktr')->references('id')->on('dokters');
            $table->string('Nama_dktr');
            $table->string('Spesialis');
            $table->string('Alamat_dktr');
            $table->bigInteger('Telpn_dktr');
            $table->bigInteger('Kode_plklinik')->unsigned();
            $table->foreign('Kode_plklinik')->references('id')->on('dokters');
            $table->string('Tarif');
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
        Schema::dropIfExists('dokters');
    }
}
