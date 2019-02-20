@extends('layout.layout') 
@section('title') Blog - Postagens @stop

@section('body')

    <h1 class="my-4"></h1>
    
    @foreach($postagemList as $post2)
    <div class="card mb-4">
    	<div class="card-body">
    		<h2 class="card-title">{{ $post2['title'] }}</h2>
    		<p class="card-text">{{ $post2['content'] }}</p>
    		<a href="#" class="btn btn-primary">Read More &rarr;</a>
    	</div>
    	<div class="card-footer text-muted">
    		Posted on January 1, 2017 by <a href="#">Start Bootstrap</a>
    	</div>
    </div>
    @endforeach 

@stop

@section('menu')
    <div class="card my-4">
    	<h5 class="card-header">Acoes</h5>
    	<div class="card-body">
    		<div class="input-group">
    			<a href="/posts/postagem"> <span class="input-group-btn">
    					<button class="btn btn-secondary" type="button">Nova postagem!</button>
    			</span>
    			</a>
    		</div>
    	</div>
    </div>
@stop
