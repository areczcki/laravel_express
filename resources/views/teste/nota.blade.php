@extends('template')

@section('title')
	ol�
@stop

@section('content')
	<h1> Anota��es </h1>
	
	<ul>
		@foreach($notas as $nota)
			<li>{{ $nota }}</li>
		@endforeach
	</ul>
@stop