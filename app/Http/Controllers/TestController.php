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
    	return view('test.notas');
    }
}
