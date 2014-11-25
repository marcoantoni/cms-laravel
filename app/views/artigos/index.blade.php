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
                    <th width="5%">Id</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th width="5%">#</th>
                    <th width="5%">#</th>
                </tr>
            </thead>
            <tbody>                
                @foreach ($artigos as $artigo)
                <tr>
                    <td>{{ $artigo->id }}</td>
                    <td>{{ $artigo->titulo }}</td>
                    <td>{{ $artigo->texto }}</td>
                    <td>{{ ($artigo->categoria == null?"Nenhuma":$artigo->categoria) }}</td>
                    <td> {{ ($artigo->status == "1"?"Ativo":"Inativo") }} </td>
                    <td>
                        <a href="/artigos/{{ $artigo->id }}/edit" class="botao botao-normal">Editar</a>
                    </td>

                    <td>
                        {{ Form::open(array('route' => ['artigos.destroy', $artigo->id], 'method'=>'delete','class' => 'Form', 'role' => 'form')) }}
                        {{ Form::submit('Remover', array('class' => 'botao botao-erro ')) }}
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