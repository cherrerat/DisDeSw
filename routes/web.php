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
    return view('CSTRAD');
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
            'uses'=>'c_CarabineroPasajero@view',
            'as'=>'vistaPasajero'
        ]);
        Route::get('añadirPasajeros',[
            'uses'=>'c_CarabineroPasajero@añadirPasajerosTest',
            'as'=>'añadirPasajeros'
        ]);
        Route::post('buscarPasajero',[
            'uses'=>'c_CarabineroPasajero@buscarPasajero',
            'as'=>'buscarPasajero'
        ]);
    
    });

//Rutas de testing y poblamiento de datos de prueba
Route::get('rellenarDB','Controller@rellenarDB');

Route::get('test','c_index@llenarDetalles');