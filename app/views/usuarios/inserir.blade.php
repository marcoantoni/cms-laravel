@extends('leiautes.padrao')

@section('titulo')
Inserir | Usuários
@stop

@section('conteudo')

<h1>Inserir usuário</h1>
 
<hr>
 
{{ Form::open(array('url' => 'usuarios/inserir', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    <label for="nome" >Nome</label>
    {{ Form::text('nome', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}

    <label for="email" >Email</label>
    {{ Form::email('email', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Email', 'required' =>'required', 'id' => 'email')) }}


    <label for="senha" >Senha</label>
    {{ Form::password('senha', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Senha', 'required' =>'required')) }}

	<label for="tipo" >Tipo</label>
    {{ Form::select('tipo', array('admin' => 'Administrador', 'autor' => 'Autor'), '', array('class' => 'form-caixa-texto form-caixa-texto-g')) }}

    <br/>
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('usuarios') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
