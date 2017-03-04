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
//CLIENTES
//adiciona rota para url '/clientes'
Route::get('/clientes', 'ClienteController@index');

//adiciona rota para url '/clientes/cria'
Route::get('/clientes/cria','ClienteController@cria');

//adiciona rota para url '/clientes/armazena'
Route::post('/clientes','ClienteController@armazena');


//IMOVELS
//adiciona rota para url '/imovels'
Route::get('/imovels','ImovelController@index');

//adiciona rota para url '/imovels/cria'
Route::get('/imovels/cria','ImovelController@cria');

//adiciona rota para url '/imovels' para armazenar informações
Route::post('/imovels','ImovelController@armazena');

//adiciona rota para url '/reservas'
Route::get('/reservas','ReservaController@index');

//adiciona rota para url '/reserva/cria'
Route::get('/reservas/cria','ReservaController@cria');

//adiciona rota para url /reservas/1 por exemplo
Route::get('/reservas/{reserva}','ReservaController@show');
