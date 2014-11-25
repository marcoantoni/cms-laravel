@extends('leiautes.padrao')

@section('titulo')
Inserir | Comentário
@stop

@section('conteudo')

<h1>Inserir comentario</h1>

<hr>

{{ Form::open(array('route' => 'comentarios.store', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    <label for="artigo">Artigo</label><br/>
    <select id="artigo" name="artigo">
    @foreach ($artigos as $artigo)
        <option value="{{ $artigo->id }}">{{ $artigo->titulo }}</option>
    @endforeach
    </select>
    <br/>
    <label for="nome">Nome</label>
    {{ Form::text('nome', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}
    <br/>
    <label for="comentario">Comentário</label><br/>
    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br/>

    <label for="status">Status</label>
    {{ Form::select('status', array('1' => 'Ativo', '0' => 'Inativo'), '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'id' => 'status')) }}
    <br />
    <br />
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('comentarios') }}" title="Cancelar" class="botao">Cancelar</a>
</div>

{{ Form::close() }}
@stop
