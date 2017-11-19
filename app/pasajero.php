<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "pasajero";
    //Atributos del modelo
    protected $fillable = ['id', 'Run','Nombre','Apellido','Telefono','Profugo'];
    //Funciones del modelo
    function alertas(){
        return $this->hasMany('App\alerta','pasajero_id');
    }
    function viajes(){
        return $this->belongsToMany('App\viaje','viajepasajero','pasajero_id','viaje_id');
    }
}
