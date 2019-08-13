<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Nomor_resp')->unsigned();
            $table->foreign('Nomor_resp')->references('id')->on('details');
            $table->bigInteger('Kode_obat')->unsigned();
            $table->foreign('Kode_obat')->references('id')->on('details');
            $table->bigInteger('Harga');
            $table->string('Dosis');
            $table->string('sub_total');
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
        Schema::dropIfExists('details');
    }
}
