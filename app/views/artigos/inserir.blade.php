@extends('leiautes.padrao')

@section('titulo')
Inserir | Artigo
@stop

@section('conteudo')

<h1>Inserir artigo</h1>
 
<hr>
 
{{ Form::open(array('url' => 'artigos/store', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    <label for="titulo" class="col-lg-2 control-label">Titulo</label>
    {{ Form::text('titulo', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Titulo', 'required' =>'required', 'id' => 'titulo')) }}
    <br/>
	<textarea name="texto" id="texto" cols="30" rows="10"></textarea>
	
	<label for="categoria" class="col-lg-2 control-label">Categoria</label>

	<br />
	<br />	
	<select id="id_categoria" name="id_categoria">
	@foreach ($categorias as $categoria)
		<option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
	@endforeach
	</select>

	<br />
	<br />
    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('artigos') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
