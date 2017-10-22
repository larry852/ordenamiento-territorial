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
//Ruta para consultar lista de departamentos
Route::get('departamentos/nombre/{name_departamento}', 'DepartamentosController@show')->middleware('cors');
//Ruta para realizar busqueda de un departamento por su nombre
Route::get('departamentos/dane/{dane_departamento}', 'DepartamentosController@showdane')->middleware('cors');
//Ruta para realizar busqueda de un departamento por su dane

Route::get('municipios/{id_departamento}', 'MunicipiosController@show')->middleware('cors');
//Ruta para consultar lista de municipios de un departamento
Route::get('municipios/{id_departamento}/nombre/{name_departamento}', 'MunicipiosController@showname')->middleware('cors');
//Ruta para realizar busqueda de un municipio de un departamento por su nombre
Route::get('municipios/{id_departamento}/dane/{dane_departamento}', 'MunicipiosController@showdane')->middleware('cors');
//Ruta para realizar busqueda de un municipio de un departamento por su dane

Route::get('zonas/{id_municipio}', 'ZonasController@show')->middleware('cors');
//Ruta para consultar lista de zonas de un municipio
Route::get('zonas/{id_zona}/detalles', 'ZonasController@detail')->middleware('cors');
//Ruta para consultar detalles de una zona 
Route::get('zonas/{id_municipio}/{texto}','ZonasController@showText')->middleware('cors');
//Ruta para realizar busqueda de una zona de un municipio por texto 

Route::get('usuarios', 'UsuariosController@index')->middleware('cors');
//Ruta para consultar lista de usuarios
Route::get('usuarios/{id_usuario}/detalles', 'UsuariosController@detail')->middleware('cors');
//Ruta par consultar detalles de un usuario










Route::get('graficos','Ordenamientos@graficos')->middleware('cors');
//Ruta provisional para visualizar estadisticas para realizar los graficos


//Route::resource('usuario','Usuariocontroller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/ordenamientos', 'Ordenamientos');

