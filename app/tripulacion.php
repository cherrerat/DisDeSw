<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tripulacion extends Model
{
    protected $table = "tripulacion";
    
    protected $fillable = ['id', 'rut','nombre','apellido','edad','horasTrabajadas'];
}
