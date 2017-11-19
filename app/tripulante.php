<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tripulante extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "tripulante";
    //Atributos del modelo
    protected $fillable = ['id', 'Run','Nombre','Apellido','Telefono','CantMultasAño','CantMultasTotal','HorasDeTrabajoDia','HorasDeTrabajoSemana','CargoPrincipal','InicioContrato','FinContrato','empresaDeBus_id'];
    //Funciones del modelo
    function alertas(){
        return $this->hasMany('App\alerta','tripulante_id');
    }
    function viajes(){
        return $this->hasMany('App\viaje');
    }
    function empresaDeBus(){
        return $this->belongsTo('App\empresaDeBus');
    }
    
}
