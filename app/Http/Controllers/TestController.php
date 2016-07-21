<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index($nome){  // variavel nome quer dizer que deverá receber uma variavel tipo get http://meusite.com/controller/variavel_$nome

    	return view('test.index', ['nome'=>$nome]);
    }

    public function notas(){


    	$notas = [

    		0 => 'Anotação 1',
    		1 => 'Anotação 3',
    		2 => 'Anotação 4',
    		3 => 'Anotação 5',
    		4 => 'Anotação 6',

    	];

    	//return view('test.notas', ['notas' => $notas]); // Possibilidade de array 1
    	return view('test.notas', compact('notas')); // Possibilidade de array 2
    }
}
