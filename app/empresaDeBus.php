<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresaDeBus extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "empresaDeBus";
    //Atributos del modelo
    protected $fillable = ['id','Rut','Nombre'];
    //Funciones del modelo
    function buses(){
        return $this->hasMany('App\bus');
    }
    function tripulacion(){
        return $this->hasMany('App\tripulante');
    }

}
