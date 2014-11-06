@extends('leiautes.padrao')

@section('titulo')
Usuários
@stop

@section('conteudo')   
	<a href="{{ url('usuarios/inserir') }}"  class="botao botao-sucesso botao-maior">Novo</a>
    @if($usuarios->count())      
    <div class="col-12">        
        <table class="tabela tabela-borda">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th width="15%">Ações</th>
                </tr>
            </thead>
            <tbody>                
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ ($usuario->tipo == 'admin'?'Administrador':'Autor') }}</td>
                    <td>
                        <a href="{{ url('usuarios/editar', $usuario->id) }}" class="botao botao-normal">
                            <span class="glyphicon glyphicon-edit"></span>Editar
                        </a>

                        <a href="{{ url('usuarios/remover', $usuario->id) }}" class="botao botao-erro">
                            <span class="glyphicon glyphicon-remove"></span>Remover
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    @else
        <h2>Nenhum usuário cadastrado.</h2>
    @endif
@stop