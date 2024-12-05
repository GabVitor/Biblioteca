<h1>Cadastrar livros</h1>
<form method="POST" action="/livros/salvar">
@csrf
<label>Título:</label>
<input type="text" name="nome" value="{{@$resultado->titulo}}"><br>
<select name="id_autores">
    @foreach($autores as $autor)
    <option value = "">Selecione...</option>
    <option value="{{$autor->id}}">{{$autor->nome}}</option>
    @endforeach
</select>
<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>

