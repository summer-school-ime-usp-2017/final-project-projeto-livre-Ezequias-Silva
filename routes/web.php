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

//adiciona rota para url '/clientes'
Route::get('/clientes', 'ClienteController@index');

//adiciona rota para url '/clientes/cria'
Route::get('/clientes/cria','ClienteController@cria');

//adiciona rota para url '/clientes/armazena'
Route::post('/clientes','ClienteController@armazena');
