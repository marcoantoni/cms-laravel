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
                    <th width="5%">Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th width="5%">#</th>
                    <th width="5%">#</th>
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
                        <a href="{{ url('usuarios/editar', $usuario->id) }}" class="botao botao-normal">Editar
                        </a>
                    </td>

                    <td>
                        <a href="{{ url('usuarios/remover', $usuario->id) }}" class="botao botao-erro">Remover
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