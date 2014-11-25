@extends('leiautes.padrao')

@section('titulo')
Categorias
@stop

@section('conteudo')   
    <a href="{{ url('categorias/inserir') }}"  class="botao botao-sucesso botao-maior">Novo</a>
    @if($categorias->count())      
    <div class="col-12">        
        <table class="tabela tabela-borda">
            <thead>
                <tr>
                    <th width="5%">Id</th>
                    <th>Descrição</th>
                    <th width="5%">#</th>
                    <th width="5%">#</th>
                </tr>
            </thead>
            <tbody>                
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>
                        <a href="{{ url('categorias/editar', $categoria->id) }}" class="botao botao-normal">Editar</a>
                    </td>

                    <td>
                        <a href="{{ url('categorias/remover', $categoria->id) }}" class="botao botao-erro">Remover</a>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    @else
        <h2>Nenhuma categoria cadastrada.</h2>
    @endif
@stop