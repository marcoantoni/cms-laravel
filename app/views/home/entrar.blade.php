@extends('leiautes.entrar')

@section('titulo')
Entrar
@stop

@section('conteudo')
<h1 class="texto-centralizado">Entrar</h1>
<hr/>
<div class="entrar">
    <div class="col-4">
        {{ Form::open(array('url' => 'entrar','class'  => 'form')) }}
            
            {{ Form::email('email', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'autofocus', 'placeholder' => 'E-mail')) }}        
            <br/>            
            {{ Form::password('senha', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Senha')) }}
            
            @if (Session::has('flash_error'))
                <div class="alert alert-danger">E-mail ou senha inválidos.</div>
            @endif
            
            <br/>        
            {{ Form::submit('Entrar', array('class' => 'botao botao-sucesso botao-maior')) }}        
            {{ Form::reset('Limpar', array('class' => 'botao botao-maior')) }}        

        {{ Form::close() }}
    </div>    
</div>
@stop