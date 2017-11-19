<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "usuario";
    //Atributos del modelo
    protected $fillable = ['id', 'Patente', 'User','Password','Perfil'];
    //Funciones del modelo
    
}
