<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // referenciar o modelo Post
use App\Http\Requests;

class PostsController extends Controller
{
    public function index(){

    	$posts = \App\Post::all();

    	return view('posts.index', compact('posts')); // retorna a view com o array $post
    }
}
