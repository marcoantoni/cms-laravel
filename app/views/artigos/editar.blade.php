@extends('leiautes.padrao')

@section('titulo')
Editar | Artigos
@stop

@section('conteudo')

<h1>Editar artigo</h1>

<hr>

{{ Form::open(array('route' => ['artigos.update', $artigo->id], 'class' => 'form', 'method' => 'put' ,'role' => 'form')) }}

	<div class="col-8">
	    <label for="titulo">Titulo</label>
	    {{ Form::text('titulo', $artigo->titulo, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Título', 'required' =>'required', 'id' => 'titulo')) }}
		
		<label for="texto" >Texto</label><br>
		{{ Form::textarea('texto', $artigo->texto, ['size' => '109x5', 'placeholder' => 'Informe um texto']) }}

		<br>
		<label for="id_categoria" >Categoria</label>
		<select name="id_categoria" id="id_categoria" class="form-caixa-texto form-caixa-texto-g">
			<option value="">Nenhuma</option>
			@foreach ($categorias as $categoria)
				@if ($categoria->id == $artigo->id_categoria)
					<option selected value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
				@else
					<option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
				@endif
			@endforeach
		</select>   


		<label for="status" >Status</label>
	    {{ Form::select('status', array('1' => 'Ativo', '0' => 'Inativo'), $artigo->status, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'status')) }}	

		<br />

	    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
	    <a href="{{ url('artigos') }}" title="Cancelar" class="botao">Cancelar</a>
	</div>
 
{{ Form::close() }}

@stop
