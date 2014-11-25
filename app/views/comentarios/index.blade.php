@extends('leiautes.padrao')

@section('titulo')
Comentarios
@stop

@section('conteudo')
    <a href="{{ url('comentarios/create') }}"  class="botao botao-sucesso botao-maior">Novo</a>
    @if($comentarios->count())
    <div class="col-12">
        <table class="tabela tabela-borda">
            <thead>
                <tr>
                    <th width="5%">Id</th>
                    <th>Artigo</th>
                    <th>Nome</th>
                    <th>Comentário</th>
                    <th>Status</th>
                    <th width="5%">#</th>
                    <th width="5%">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->id }}</td>
                    <td>{{ $comentario->titulo }}</td>
                    <td>{{ $comentario->nome }}</td>
                    <td>{{ $comentario->comentario }}</td>
                    <td>{{ ($comentario->status == '1'?'Ativo':'Inativo') }}</td>
                    <td>
                        <a href="/comentarios/{{ $comentario->id }}/edit" class="botao botao-normal">
                            <span class="glyphicon glyphicon-edit"></span>Editar
                        </a>
                    </td>
                    <td>
                        {{ Form::open(array('route' => ['comentarios.destroy', $comentario->id], 'method'=>'delete','class' => 'Form', 'role' => 'form')) }}
                        {{ Form::submit('Remover', array('class' => 'botao botao-erro ')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <h2>Nenhum comentario cadastrado.</h2>
    @endif
@stop