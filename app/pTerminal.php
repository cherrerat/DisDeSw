<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pTerminal extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "pTerminal";
    //Atributos del modelo
    protected $fillable = ['id', 'direccion','hora','anden'];
    //Funciones del modelo
    protected function viajeO(){
        return $this->hasMany('App\viaje','origen_id');
    }
    protected function viajeD(){
        return $this->hasMany('App\viaje','destino_id');
    }
}