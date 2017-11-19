<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terminal extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "terminal";
    //Atributos del modelo
    protected $fillable = ['id', 'Direccion','Ubicacion','Capacidad'];
    //Funciones del modelo
    function viajeO(){
        return $this->belongsToMany('App\viaje','viajeterminal','origen_id','viaje_id');
    }
    function viajeD(){
        return $this->belongsToMany('App\viaje','viajeterminal','destino_id','viaje_id');
    }

}