<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViajePasajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajepasajero', function(Blueprint $table){
            $table->integer('viaje_id')->unsigned();
            $table->integer('pasajero_id')->unsigned();

            $table->primary(['viaje_id','pasajero_id']);
            $table->foreign('viaje_id')->references('id')->on('viaje');
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
        Schema::drop('viajepasajero');
    }
}
