<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstadisticaBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticaBus', function(Blueprint $table){
            $table->increments('id');
            $table->string('ExcesoVelocidad');
            $table->integer('bus_id')->unsigned();

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
        Schema::drop('estadisticaBus');
    }
}
