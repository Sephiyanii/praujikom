<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Kode_psien')->unsigned();
            $table->foreign('Kode_psien')->references('id')->on('pasiens');
            $table->string('Nama_psien');
            $table->string('Alamat_psien');
            $table->string('Gender_psien');
            $table->string('Umur_psien');
            $table->string('Telpn_psien');
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
        Schema::dropIfExists('pasiens');
    }
}
