<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\usuario;

class C_Usuario extends Controller
{
    public function C_VerificarUsuario(Request $request){
        $user=$request->username;
        $pass=$request->password;
        $usuario=new usuario;
        $aux1=$usuario->VerificarUsuario($user,$pass);
        //dd($aux1);
        if($aux1=='Usuario'){
            return view('index',[
                'alert'=>'Usuario incorrecto'
            ]);
        }else if($aux1=='Contraseña'){
            return view('index',[
                'alert'=>'Contraseña incorrecta'
            ]);
        }else if($aux1=='Carabinero'){
            return view($aux1,[
                'placeholder'=>'Ingrese datos de busqueda',
                'value'=>''
            ]);
        }else{
            return view($aux1);
        }
    }
}
