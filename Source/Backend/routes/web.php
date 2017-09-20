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
Route::get('prueba',function(){
return "Hola mundo!";

});

/*Route::get('usuario/{nombre}', function ($name) {
    return "El nombre del usuario es: ".$name;
});*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('controlador','Controlador_prueba@index');

Route::get('pot','Control_pot@mostrar');

Route::resource('usuario','Usuariocontroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//
Route::resource('/ordenamientos', 'Ordenamientos');
