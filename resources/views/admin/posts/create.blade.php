@extends('layout.layout')
@section('title') Blog - Postagens @stop

@section('body')

<h1 class="my-4">Criar Post</h1>

{!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Content:') !!}
	{!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}