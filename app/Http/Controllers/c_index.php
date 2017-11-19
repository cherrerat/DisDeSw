<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viaje;
use Illuminate\Support\Facades\DB;
use JavaScript;
use Illuminate\Routing\UrlGenerator;

class c_index extends Controller
{
    public function view(){
        return view('index'); //abrir vista 'index'
    }

    //$request seria como el diccionario que manda el Ajax, ({bus:bus}) -> se mostraria como ({parametro:data}) y para asignarlo $algo=$request->parametro;
    //$algo queda como: 'data'
    public function C_Buscar_Viaje(Request $request){
        $aux = $request->bus;
        $viaje=new viaje;
        $bus= $viaje->buscarInformacion($aux);
        return $bus;
    }
    public function llenarDetalles(Request $request){
        $aux = $request->bus;
        $viaje=new viaje;
        $aux1 = $viaje->llenarDetalles($aux);
        return $aux1;
    }
}
