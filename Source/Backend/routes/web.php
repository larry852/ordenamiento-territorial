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

Route::get('departamentos', 'DepartamentosController@index');

Route::get('municipios/{departamento}', 'MunicipiosController@show');

Route::get('zonas/{municipio}', 'ZonasController@show');

Route::get('zonas/{zona}/detalles', 'ZonasController@detail');

Route::get('usuarios', 'UsuariosController@index');

Route::get('usuarios/{usuario}/detalles', 'UsuariosController@detail');






Route::resource('usuario','Usuariocontroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/ordenamientos', 'Ordenamientos');

