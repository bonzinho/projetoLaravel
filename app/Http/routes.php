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

Route::get('/', 'PostsController@index');  // paginas incial para para o cPostController metodo index

Route::get('admin/posts', ['as' => 'admin.posts.index', 'uses'=> 'PostsAdminController@index']); // admin/posts
Route::get('admin/posts/create', ['as' => 'admin.posts.create', 'uses'=>'PostsAdminController@create']);  //admin/posts/create
Route::post('admin/posts/store', ['as' => 'admin.posts.store', 'uses'=>'PostsAdminController@store']);  // envio do post para criar um novo post  (admin/posts/store)