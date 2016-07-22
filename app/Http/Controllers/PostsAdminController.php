<?php

namespace App\Http\Controllers;


use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request; // usado para o Request do store por exemplo

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

    public function create(){
    	return view('admin.posts.create');
    }

    public function store(PostRequest $request){
    	
    	//dd($request->all());  // o dd (die and dump) faz com que mate a aplicação e mostre os resultados

    	//dd($this->post->create($request->all())); // criar post
    	$this->post->create($request->all()); // criar post

    	return redirect()->route('admin.posts.index'); //redireciona para o route admin.posts.index
    }
}
