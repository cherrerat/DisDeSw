<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    protected $table = "ruta";
    
    protected $fillable = ['id', 'camino'];
}
