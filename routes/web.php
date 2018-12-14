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
    return view('contenido/contenido');
});

//controlador usuarios
Route::get('/usuarios', 'UsuariosController@index');
Route::post('/usuarios/registrar', 'UsuariosController@store');
Route::put('/usuarios/actualizar', 'UsuariosController@update');
Route::put('/usuarios/desactivar', 'UsuariosController@desactivar');
Route::put('/usuarios/activar', 'UsuariosController@activar');

//controlador tipo_usuarios
Route::get('/tipousuarios', 'tipo_usuariosController@index');
Route::post('/tipousuarios/registrar', 'tipo_usuariosController@store');
Route::put('/tipousuarios/actualizar', 'tipo_usuariosController@update');
Route::get('/tipousuarios/selectTipousuarios', 'tipo_usuariosController@selectTipousuarios');



