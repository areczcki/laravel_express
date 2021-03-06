@extends("base_layout.layout")
@section("conteudo")

<h1 class="my-4">Edit Post: {{ $post->title }}</h1>

@if($errors->any())
	<ul class="alert">
		@foreach($errors->all() as $error)	
		<li> {{ $error }} </li>
		@endforeach
    </ul>
@endif

{!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) !!}

@include('admin.posts._form')

<div class="form-group">
	{!! Form::submit('Editar Post', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
@stop