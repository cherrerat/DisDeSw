<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usuario extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "usuario";
    //Atributos del modelo
    protected $fillable = ['id', 'Patente', 'User','Password','Perfil'];
    //Funciones del modelo
    public function VerificarUsuario($user,$password){
        $user1=DB::table('usuario')->where('User',$user)->first();
        //dd($user1);
        if($user1!=null){
            if($password==$user1->Password){
                return $user1->Perfil;
            }else{
                return "Contraseña";
            }
        }else{
            return 'Usuario';
        }
    }
}
