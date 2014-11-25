@extends('leiautes.padrao')

@section('titulo')
Inserir | Artigo
@stop

@section('conteudo')

<h1>Inserir artigo</h1>
 
<hr>
 
{{ Form::open(array('route' => 'artigos.store', 'class' => 'form', 'role' => 'form')) }}

<div class="col-8">
    <label for="titulo">Titulo</label>
    {{ Form::text('titulo', '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Título', 'required' =>'required', 'id' => 'titulo')) }}
	
	<label for="texto" >Texto</label><br>
	{{ Form::textarea('texto', null, ['size' => '109x5', 'placeholder' => 'Informe um texto']) }}

	<br>
	<label for="id_categoria" >Categoria</label>
	<select name="id_categoria" id="id_categoria" class="form-caixa-texto form-caixa-texto-g">
		<option value="">Nenhuma</option>
		@foreach ($categorias as $categoria)            	
			<option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
		@endforeach
	</select>   

	<label for="status" >Status</label>
    {{ Form::select('status', array('1' => 'Ativo', '0' => 'Inativo'), '', array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'status')) }}	

	<br />

    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
    <a href="{{ url('artigos') }}" title="Cancelar" class="botao">Cancelar</a>
</div>
 
{{ Form::close() }}
@stop
