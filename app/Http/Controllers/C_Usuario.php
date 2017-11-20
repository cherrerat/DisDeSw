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
        return $aux1;
    }
    public function vista(Request $request){
        $perfil=$request->Perfil;
        view($perfil);
    }
}
