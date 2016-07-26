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

Route::group(['prefix' => 'admin'], function(){

	Route::group(['prefix' => 'posts'], function(){ 

		Route::get('', ['as' => 'admin.posts.index', 'uses'=> 'PostsAdminController@index']); // admin/posts
		Route::get('create', ['as' => 'admin.posts.create', 'uses'=>'PostsAdminController@create']);  //admin/posts/create
		Route::post('store', ['as' => 'admin.posts.store', 'uses'=>'PostsAdminController@store']);  // envio do post para criar um novo post  (admin/posts/store)
		Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses'=>'PostsAdminController@edit']);  // envio do post para criar um novo post  (admin/posts/store)
		Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses'=>'PostsAdminController@update']);  // envio do post para criar um novo post  (admin/posts/store)
		Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses'=>'PostsAdminController@destroy']);  // envio do post para criar um novo post  (admin/posts/store)


	});
});

