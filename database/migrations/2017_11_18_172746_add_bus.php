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
            $table->string('Patente');
            $table->integer('CapacidadMax');
            $table->integer('empresaDeBus_id')->unsigned();

            $table->foreign('empresaDeBus_id')->references('id')->on('empresaDeBus');

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
