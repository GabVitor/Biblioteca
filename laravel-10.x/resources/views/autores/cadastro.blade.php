<h1>Inserir autores</h1>
<form method="POST" action="/autores/salvar">
@csrf
<label>Nome:</label>
<input type="text" name="nome" value="{{@$resultado->nome}}"><br>
<label>Email:</label>

<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>

