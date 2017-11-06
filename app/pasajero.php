<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "pasajero";
    //Atributos del modelo
    protected $fillable = ['id', 'rut','nombre','apellido','edad','antecedentes'];
    //Funciones del modelo
    public function buses(){
        return $this->belongsToMany('App\bus');
    }
}
