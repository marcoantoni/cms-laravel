@extends('leiautes.padrao')

@section('titulo')
Editar | Comentário
@stop

@section('conteudo')

<h1>Editar comentário</h1>

<hr>
    {{ Form::open(array('route' => ['comentarios.update', $comentario->id], 'method' => 'put', 'class' => 'form', 'role' => 'form')) }}
    <label for="artigo">Artigo</label><br/>
    <div class="col-8">
        <select id="artigo" name="artigo">
            @foreach ($artigos as $artigo)
                @if ($artigo->id == $comentario->artigo)
                    <option selected value="{{ $artigo->id }}">{{ $artigo->titulo }}</option>
                @else
                    <option value="{{ $artigo->id }}">{{ $artigo->titulo }}</option>
                @endif
            @endforeach
        </select>
        <br/>
        <label for="nome">Nome</label>
        {{ Form::text('nome', $comentario->nome, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}
        <br/>
         <label for="comentario">Comentário</label><br/>
        <textarea name="comentario" id="comentario" cols="30" rows="10">{{ $comentario->comentario }}</textarea><br/>
        <label for="status">Status</label>
        {{ Form::select('status', array('1' => 'Ativo', '0' => 'Inativo'), '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'id' => 'status')) }}

        {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
        <a href="{{ url('comentarios') }}" title="Cancelar" class="botao">Cancelar</a>
    </div>

{{ Form::close() }}
@stop
