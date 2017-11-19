<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas utilizadas por JS, Ajax y JQuery.
Route::post('/buscarInformacion', 'c_index@C_Buscar_Viaje');
Route::post('/llenarDetalles', 'c_index@llenarDetalles');
Route::post('/login','C_Usuario@C_VerificarUsuario');