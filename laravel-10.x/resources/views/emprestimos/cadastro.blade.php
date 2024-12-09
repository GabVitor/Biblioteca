<h1>Empréstimos</h1>
<form method="POST" action="/emprestimos/salvar">
@csrf
<label>Nome do usuário:</label>
    <input type="text" name="nome" value="{{@$resultado->nome}}"><br>

<select name="id_livros">
    @foreach($livros as $livro)
    <option value = "">Selecione...</option>
    <option value="{{$livro->id}}">{{$livro->titulo}}</option>
    @endforeach
</select>

<select name="id_autores">
    @foreach($autores as $autor)
    <option value = "">Selecione...</option>
    <option value="{{$autor->id}}">{{$autor->nome}}</option>
    @endforeach
</select>

<label>Data do Empréstimo:</label>
    <input type="date" name="data_emprestimo" value="{{@$resultado->data_emprestimo}}"><br>

<label>Data da Devolução:</label>
    <input type="date" name="data_devolucao" value="{{@$resultado->data_devolucao}}"><br>

<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>

