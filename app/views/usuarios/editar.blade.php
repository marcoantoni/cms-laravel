@extends('leiautes.padrao')

@section('titulo')
Editar | Usuários
@stop

@section('conteudo')

<h1>Editar usuário</h1>
 
<hr>
 
{{ Form::open(array('url' => 'usuarios/editar', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    {{ Form::hidden('id', $usuario->id) }}

    <label for="nome" class="col-lg-2 control-label">Nome</label>
    {{ Form::text('nome', $usuario->nome, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Nome', 'required' =>'required', 'id' => 'nome')) }}

    <label for="email" class="col-lg-2 control-label">Email</label>
    {{ Form::email('email', $usuario->email, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Email', 'required' =>'required', 'id' => 'email')) }}


    <label for="senha" class="col-lg-2 control-label">Senha</label>
    {{ Form::password('senha', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Senha')) }}

	<label for="tipo" class="col-lg-2 control-label">Tipo</label>
    {{ Form::select('tipo', array('admin' => 'Administrador', 'autor' => 'Autor'), $usuario->tipo, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Senha')) }}

    <br/>
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('usuarios') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
