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

Route::get('/', function () {
    return view('index');
});


//Route::get('index/{id}', 'c_index@view');

/*Route::group(['prefix'=>'/index'],function(){

    Route::get('map',[
        'uses'=>'c_index@view',
        'as'=>'map'
    ]);

});

Route::get('map/data', 'c_index@testing')->name('mapData')*/