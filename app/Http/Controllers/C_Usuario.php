<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\usuario;

class C_Usuario extends Controller
{
    public function C_VerificarUsuario(Request $request){
        $user=$request->User;
        $pass=$request->Password;
        $usuario=new usuario;
        $aux1=$usuario->VerificarUsuario($user,$pass);
        if($aux1=='Usuario' || $aux1=='Contraseña'){
            $aux2=['aux'=>$aux1];
            return view('index',$aux2);
        }else{
            return view($aux1);
        }
        return $aux1;
    }
}
