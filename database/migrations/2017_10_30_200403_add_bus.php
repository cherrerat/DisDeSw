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
            $table->integer('id_viaje')->unsigned();
            $table->integer('id_tripulacion')->unsigned();
            $table->integer('id_pasajero')->unsigned();

            $table->foreign('id_viaje')->references('id')->on('viajes');
            $table->foreign('id_tripulacion')->references('id')->on('tripulaciones');
            $table->foreign('id_pasajero')->references('id')->on('pasajeros');

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
