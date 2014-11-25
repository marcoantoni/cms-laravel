@extends('leiautes.padrao')

@section('titulo')
Inserir | Categorias
@stop

@section('conteudo')

<h1>Inserir categoria</h1>
 
<hr>
 
{{ Form::open(array('url' => 'categorias/inserir', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    <label for="nome">Nome</label>
    {{ Form::text('nome', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}
    <br/>
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('categorias') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
