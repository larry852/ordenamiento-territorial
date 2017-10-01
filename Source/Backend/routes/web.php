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
    return view('welcome');
});

/*Route::resource('administrador','AdministradorController');
Route::resource('administrador.usuario','Usuario_anonimoController');
Route::resource('usuario-auto','Usuario_autorizadoController');
Route::resource('usuario','Usuario_anonimoController');*/

Route::get('departamentos', 'DepartamentosController@index')->middleware('cors');

Route::get('municipios/{departamento}', 'MunicipiosController@show')->middleware('cors');

Route::get('zonas/{municipio}', 'ZonasController@show')->middleware('cors');

Route::get('zonas/{zona}/detalles', 'ZonasController@detail')->middleware('cors');

Route::get('usuarios', 'UsuariosController@index')->middleware('cors');

Route::get('usuarios/{usuario}/detalles', 'UsuariosController@detail')->middleware('cors');






Route::resource('usuario','Usuariocontroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/ordenamientos', 'Ordenamientos');

