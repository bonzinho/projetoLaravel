@extends('template')

@section('title')
Blog
@endsection 

@section('content')
<h1>Blog</h1>
    @foreach($blog as $noticia)
    <div class="row">       
        <div class="col-md-12">            
            <a href="#"><h2><strong>Titulo: {{$noticia}}</strong></h2></a><br/>            
        </div>      
    </div>
    <hr style="margin-bottom:10px;">
    @endforeach
@endsection