<h1>Lista de Livros</h1>
<table>
<tr>
<th>Título</th>
<th>Autor</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($livros as $livro)
<tr>
<td>{{$livro->titulo}}</td>
<td>{{$livro->autor->nome}}</td>
<td><a href='/livros/cadastro/{{ $livros->id }}'>Editar</a></td>
<td><a href='/livros/remover/{{ $livros->id }}'>Remover</a></td>
</tr>
@endforeach
</table>