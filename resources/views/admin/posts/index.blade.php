@extends("base_layout.layout")
@section("conteudo")
    <h1 class="my-4">Blog Admin</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-success"> Create new post </a>
    <br/><br/>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-default"> Edit </a>
                    <a href="{{ route('admin.posts.delete', ['id' => $post->id]) }}" class="btn btn-danger"> Delete </a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
<!--
 Assim n�o funciona, pois no laravel trata os scape {{  $posts->render()  }}
        -->
<!-- Assim funciona, trata os scape -->
{!! $posts->render() !!}
