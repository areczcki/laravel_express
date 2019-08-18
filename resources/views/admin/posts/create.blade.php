@extends("base_layout.layout")
@section("conteudo")

    <h1 class="my-4">Criar Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop