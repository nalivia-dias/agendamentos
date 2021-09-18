<h1>VISUALIZAR DADOS {{$post->title}}</h1>

<ul>
    <li><strong>Título: </strong>{{ $post->id }}</li>
    <li><strong>Nome: </strong>{{ $post->nome }}</li>
    <li><strong>Telefone: </strong>{{ $post->telefone }}</li>
    <li><strong>Data: </strong>{{ $post->data }}</li>
    <li><strong>Convenio: </strong>{{ $post->convenio }}</li>
    <li><strong>Sexo: </strong>{{$post->sexo ==2 ? "Feminino " : "Masculino"}}</li>
    <li><strong>Idade: </strong>{{ $post->idade }}</li>
    <li><strong>Etinia: </strong>{{ $post->etinia }}</li>
</ul>

<form action= "{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf 
    <input type="hidden" name="_method" value="DELETE" >
    <button type="submit">Excluir Dados: {{ $post->title }}</button>
</form>