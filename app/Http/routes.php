<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio/{nome}', 'TestController@index'); // executa o TestController no metodo @index | {variavel} para usar tipo get
Route::get('blog', 'TestController@blog');  // vai para o controlador testeController e medoto blog