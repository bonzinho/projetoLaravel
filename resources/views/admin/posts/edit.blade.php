@extends('template')

@section('title')
Admin - Editar Post
@endsection 

@section('content')

	<h1>Editar Post: <strong>{{ $post->title }}</strong></h1>

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::model($post, ['route'=> ['admin.posts.update', $post->id], 'method' => 'put']) !!} <!--  form::model($post, ...) faz com que os campos sejam automaticamente preenchidos $post é a variavel que vem do controller || metodo "put" serve para fazer alteração -->
	
		@include('admin.posts._form')
		
		<div class="form-group">
			{!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
			{!! Form::textarea('tags', $post->TagList, ['class' => 'form-control' ]) !!}   <!-- o campo $post->tagList vai buscar o metodo que existe no modelo Post getTagListsAttribute() pega apenas o que esta no meiop do get e attribute -->
		</div>	

		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}					
		</div>

	{!! Form::close() !!}
	
@stop 