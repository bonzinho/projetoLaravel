<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class PostsAdminController extends Controller
{

	public function __construct(Post $post)
	{
		$this->post = $post; // construtor para poder usar $this->post->all() por exemplo;
	}

    public function index(){

    	//$posts = $this->post->all(); // get de todos os posts 
    	$posts = $this->post->paginate(5); // faz um get de todos os posts e pagina com 5 posts de cada vez

    	return view('admin.posts.index', compact('posts'));

    }
}
