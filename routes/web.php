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

Route::get('/', 'PagesController@master');
Route::get('/html', 'PagesController@html');
Route::get('/css1', 'PagesController@css1');
Route::get('/laravel', 'PagesController@laravel');
/*Segundo Passo: O Route abaixo recebe o "post" do formulário no laravel.blade e encaminha as informações para o FormController@inserir.*/
Route::post('/laravel/create', 'FormController@inserir');

/* O {teste} abaixo é um "wildcard", uma marcação que recebe valores variáveis e encaminha adiante para o endereço solicitado. No endereço solicitado, pode ser armazenado em uma variável qualquer com nome diferente (aqui o nome é teste, mas no FormController@destroy a variável é $id), até o momento ele acessa somente digitando o id diretamente na barra*/
Route::get('/laravel/{user}/edit/', 'FormController@edit');
Route::patch('/laravel/{user}', 'FormController@update');
Route::get('/laravel/{user}/delete', 'FormController@destroy');