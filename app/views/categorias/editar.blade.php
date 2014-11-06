@extends('leiautes.padrao')

@section('titulo')
Editar | Categorias
@stop

@section('conteudo')

<h1>Editar categoria</h1>
 
<hr>
 
{{ Form::open(array('url' => 'categorias/editar', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
	{{ Form::hidden('id', $categoria->id) }}
	
    <label for="nome">Nome</label>
    {{ Form::text('nome', $categoria->nome, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}
    <br/>
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('categorias') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
