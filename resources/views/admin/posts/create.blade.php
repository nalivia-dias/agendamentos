<h1>AGENDAMENTOS</h1>

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="">id </label> <br />
    <input type="text" name="id"> <br />

    <label for="">Nome </label> <br />
    <input type="text" name="nome"> <br />

    <label for="">Telefone </label> <br />
    <input type="text" name="telefone"> <br />

    <label for="date">Data</label> <br />
    <input type="date" class="form-control" id="data" name="data"  /> <br />

    <label for="">Convenio </label> <br />
    <input type="text" name="convenio"> <br />

    <label for="sexo">Sexo </label><br/> 
    <input checked="checked" type="radio" id="sexo" name="sexo" value="1" /> Masculino <br />
    <input type="radio" name="sexo" value="2" /> Feminino <br />

    <label for="">Idade </label> <br />
    <input type="text" name="idade"> <br />

    <label for="">Etinia </label> <br />
    <input type="text" name="etinia"> <br />

    <button type="submit">Enviar</button>
</form>