<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function(Blueprint $table){
            $table->increments('id');
            $table->string('patente');
            $table->string('ubicacion');
            $table->integer('velocidad');
            $table->integer('viaje_id')->unsigned();
            $table->integer('tripulacion_id')->unsigned();
            $table->integer('pasajero_id')->unsigned();

            $table->foreign('viaje_id')->references('id')->on('viaje');
            $table->foreign('tripulacion_id')->references('id')->on('tripulacion');
            $table->foreign('pasajero_id')->references('id')->on('pasajero');

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
        Schema::drop('bus');
    }
}
