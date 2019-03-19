@extends('layout.layout')
@section('title') Blog - Postagens @stop

@section('body')

<h1 class="my-4">Blog Admin</h1>

<table class="table">
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th></th>
  </tr>
  @foreach($posts as $post)
  <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td></td>
  </tr>
  @endforeach
</table>

<!--
 Assim não funciona, pois no laravel trata os scape {{  $posts->render()  }} 
-->
<!-- Assim funciona, trata os scape -->
{!! $posts->render() !!}
