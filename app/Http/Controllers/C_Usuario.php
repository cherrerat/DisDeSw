<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_Usuario extends Controller
{
    public function view(){
        return view('Carabinero'); //abrir vista 'Carabinero'
    }
    public function C_VerificarUsuario(Request $request){
        $user=$request->username;
        $pass=$request->password;
        $user1=DB::table('usuario')->where('User',$user)->first();
        if($user1!=null){
            if($pass==$user1->Password){
                
            }else{
                return view('index');
            }
        }else{
            return view('index');
        }
    }
}
