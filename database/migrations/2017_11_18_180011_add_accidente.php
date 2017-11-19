<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccidente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidente', function(Blueprint $table){
            $table->increments('id');
            $table->integer('viaje_id')->unsigned();
            $table->integer('bus_id')->unsigned();
            $table->integer('CantHeridos');
            $table->integer('CantMuertos');
            $table->string('Ubicacion');
            $table->string('Observacion');

            $table->foreign('viaje_id')->references('id')->on('viaje');
            $table->foreign('bus_id')->references('id')->on('bus');

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
        Schema::drop('accidente');
    }
}
