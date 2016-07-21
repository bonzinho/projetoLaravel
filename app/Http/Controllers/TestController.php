<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index($nome){  // variavel nome quer dizer que deverá receber uma variavel tipo get http://meusite.com/controller/variavel_$nome

    	$noticias = [
    		0 => $noticia = array(
    			'id' => 1,
    			'titulo' => 'Titulo da noticia 1',
    			'corpo'  => 'Loren ipsum Loren ipsum Loren ipsum Loren ipsum Loren ipsum ',
    			'data'	=> date("Y/m/d")
    			),

    		1 => $noticia = array(
    			'id' => 2,
    			'titulo' => 'Titulo da noticia 2',
    			'corpo'  => 'Loren ipsum Loren ipsum Loren ipsum Loren ipsum Loren ipsum ',
    			'data'	=> date("Y/m/d")    			),

    		2 => $noticia = array(
    			'id' => 3,
    			'titulo' => 'Titulo da noticia 3',
    			'corpo'  => 'Loren ipsum Loren ipsum Loren ipsum Loren ipsum Loren ipsum ',
    			'data'	=> date("Y/m/d")
    			),
    	];

    	return view('test.index', ['nome'=>$nome], compact('noticias'));
    }

    public function blog(){


    	$blog = [

    		0 => 'Noticia 01',
    		1 => 'Noticia 02',
    		2 => 'Noticia 03',
    		3 => 'Noticia 04',
    		4 => 'Noticia 05',

    	];

    	//return view('test.notas', ['blog' => $blog]); // Possibilidade de array 1
    	return view('test.blog', compact('blog')); // Possibilidade de array 2
    }


    
}
