@extends('leiautes.padrao')

@section('titulo')
Artigos
@stop

@section('conteudo')   
    <a href="{{ url('artigos/create') }}"  class="botao botao-sucesso botao-maior">Novo</a>
    @if($artigos->count())      
    <div class="col-12">        
        <table class="tabela tabela-borda">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Descrição</th>
                    <th width="15%">Ações</th>
                </tr>
            </thead>
            <tbody>                
                @foreach ($artigos as $artigo)
                <tr>
                    <td>{{ $artigo->id }}</td>
                    <td>{{ $artigo->titulo }}</td>
                    <td>{{ $artigo->texto }}</td>
                    <td>{{ $artigo->status }}</td>
                    <td>
                        <a href="/artigos/{{ $artigo->id }}/edit" class="botao botao-normal">
                            <span class="glyphicon glyphicon-edit"></span>Editar
                        </a>

                        {{ Form::open(array('route' => ['artigos.destroy', $artigo->id], 'method'=>'delete','class' => 'Form', 'role' => 'form')) }}
                        {{ Form::submit('Remover', array('class' => 'botao botao-sucesso ')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
    @else
        <h2>Nenhum artigo cadastrado.</h2>
    @endif
@stop