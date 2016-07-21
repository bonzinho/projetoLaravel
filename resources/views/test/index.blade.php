@extends('template')

@section('title')
Blog do projeto de laravel express
@endsection


@section('content')
		
	<h1>Olá {{$nome}}</h1>
    
	@foreach($noticias as $noticia)
	<div class="row">		
		<div class="col-md-12">
			<i>ID: {{$noticia['id']}}</i><br/>
			<strong>Titulo: {{$noticia['titulo']}}</strong><br/>
			Corpo: {{$noticia['corpo']}}<br/>
			Data: {{$noticia['data']}}
		</div>		
	</div>
	<hr style="margin-bottom:10px;">
	@endforeach


@stop