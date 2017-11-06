<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tripulacion extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "tripulacion";
    //Atributos del modelo
    protected $fillable = ['id', 'rut','nombre','apellido','edad','horasTrabajadas'];
    //Funciones del modelo
    public function buses(){
        return $this->belongsToMany('App\bus');
    }
}
