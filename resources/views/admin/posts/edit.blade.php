<h1>Editar os dados <strong>{{ $post->title }}</strong></h1>

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('posts.update', $post->id)}}" method="post">
    @csrf
    @method('put')
    <label for="id">Id </label><br/> 
    <input type="text" name="id" id="id" placeholder="Id" value="{{ $post->id }}"> <br/> 

    <label for="nome">Nome </label><br/> 
    <input type="text" name="nome" id="nome" placeholder="Nome" value="{{ $post->nome }}"> <br/> 

    <label for="telefone">Telefone </label><br/> 
    <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{ $post->telefone }}"> <br/> 

    <label for="date">Data </label><br/> 
    <input type="date" name="data" id="data" placeholder="Data" value="{{ $post->data }}"> <br/> 

    <label for="convenio">Convenio </label><br/> 
    <input type="text" name="convenio" id="convenio" placeholder="Convenio" value="{{ $post->convenio }}"> <br/> 

    <label for="sexo">Sexo </label><br/> 
    <input checked="checked" type="radio" id="sexo" name="sexo" value="1" /> Masculino
    <input type="radio" name="sexo" value="2" {{$post->sexo ==2 ? "checked='checked'" : ''}} /> Feminino <br/> 

    <label for="idade">Idade </label><br/> 
    <input type="text" name="idade" id="idade" placeholder="Idade" value="{{ $post->idade }}"> <br/> 

    <label for="">Etinia </label> <br />
    <input type="text" name="etinia" id="etinia" placeholder="Etinia" value="{{ $post->etinia }}"> <br/> 
    <button type="submit">Editar</button>
</form>