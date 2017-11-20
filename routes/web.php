<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta raiz
Route::get('/', function () {
    return view('index', [
        'alert' => ''
    ]);
});

//Rutas index
Route::group(['prefix'=>'/index'],function(){

    Route::get('map',[
        'uses'=>'c_index@view',
        'as'=>'map'
    ]);

});

//Rutas modulo Carabineros
Route::group(['prefix'=>'/carabineros'], function(){
    
        Route::get('vistaPasajero',[
            'uses'=>'c_Carabinero@C_VerPasajero',
            'as'=>'vistaPasajero'
        ]);
        Route::get('vistaBus',[
            'uses'=>'c_Carabinero@C_VerBus',
            'as'=>'vistaBus'
        ]);
        Route::get('vistaItinerario',[
            'uses'=>'c_Carabinero@C_VerItinerario',
            'as'=>'vistaItinerario'
        ]);
        Route::get('vistaReporte',[
            'uses'=>'c_Carabinero@C_VerReporte',
            'as'=>'vistaReporte'
        ]);
        Route::get('vistaTripulacion',[
            'uses'=>'c_Carabinero@C_VerTripulacion',
            'as'=>'vistaTripulacion'
        ]);
        Route::post('listarDetalles',[
            'uses'=>'c_Carabinero@C_listarDetalles',
            'as'=>'listarDetalles'
        ]);
        Route::get('añadirPasajeros',[
            'uses'=>'c_Carabinero@añadirPasajerosTest',
            'as'=>'añadirPasajeros'
        ]);
        Route::post('buscarPasajero',[
            'uses'=>'c_Carabinero@C_BuscarPasajero',
            'as'=>'buscarPasajero'
        ]);
        Route::post('posicionBus',[
            'uses'=>'c_Carabinero@C_Ver_Detalles_Bus',
            'as'=>'posicionBus'
        ]);
        Route::post('historialPasajero',[
            'uses'=>'c_Carabinero@C_listarViajes',
            'as'=>'historialPasajero'
        ]);
        Route::post('detallesItinerario',[
            'uses'=>'c_Carabinero@C_Ver_Detalles_Itinerario',
            'as'=>'detallesItinerario'
        ]);
        Route::post('detallesReporte',[
            'uses'=>'c_Carabinero@C_listarReporte',
            'as'=>'detallesReporte'
        ]);
    
    });

Route::post('login',[
    'uses'=>'C_Usuario@C_VerificarUsuario',
    'as' => 'login'
]);

//Rutas de testing y poblamiento de datos de prueba
Route::get('rellenarDB','Controller@rellenarDB');

Route::get('test/{bus}','c_Carabinero@C_BuscarPasajero');