<a href="{{route('posts.create')}}">Criar novo agendamento</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>AGENDAMENTOS</h1>

@foreach ($posts as $post)
    <p>
        {{ $post->id}}
        [
            <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
            <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
        ]
    </p>
@endforeach

<hr>

{{$posts->links()}}