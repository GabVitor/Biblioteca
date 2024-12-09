<h1>Lista de Empréstimos</h1>
<table>
<tr>
<th>Usuário</th>
<th>Livro</th>
<th>Data_Empréstimo</th>
<th>Data_Devolução</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($emprestimos as $emprestimo)
<tr>
<td>{{$emprestimo->usuario->nome}}</td>
<td>{{$emprestimo->autor->nome}}</td>
<td>{{$emprestimo->data_emprestimo}}</td>
<td>{{$emprestimo->data_devolucao}}</td>
<td><a href='/emprestimos/cadastro/{{ $emprestimos->id }}'>Editar</a></td>
<td><a href='/emprestimos/remover/{{ $emprestimos->id }}'>Remover</a></td>
</tr>
@endforeach
</table>