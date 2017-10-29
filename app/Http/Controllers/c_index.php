<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bus;
use Illuminate\Support\Facades\DB;

class c_index extends Controller
{
    public function view($patente){
        $bus = DB::table('bus')->where('patente','BC-CL-34')->value('ubicacion');
        //$bus = DB::table('bus')->where('patente',$patente)->value('ubicacion'); // USAR ESTE METODO DESPUES, CUANDO SE HAGA GET DEL FORM
        return view('index', ['ubicacion' => $bus]);
    }

    public function store(Request $request){

        //dd($request->all());
        if($request->formatoBusqueda == 'patente'){
            $bus = DB::table('bus')->where('patente',$request->datobusqueda)->value('ubicacion');
            if($bus != null){
                return view('index', ['ubicacion' => $bus]);
            }else{
                dd('No se encontro patente ingresada.'); //Cambiar por pantalla de error
            }
        }else{
            dd('Error formato de busqueda.');
        }
    }
}
