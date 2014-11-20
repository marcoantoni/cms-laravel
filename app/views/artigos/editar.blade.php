@extends('leiautes.padrao')

@section('titulo')
Editar | Categorias
@stop

@section('conteudo')

<h1>Editar artigo</h1>

<hr>
 	{{ Form::open(array('route' => ['artigos.update', $artigo->id], 'method' => 'put', 'class' => 'form', 'role' => 'form')) }}

	<div class="col-8">
		
	    <label for="nome">Titulo</label>
	    {{ Form::text('titulo', $artigo->titulo, array('class' => 'form-caixa-texto form-caixa-texto-g', 'placeholder' => 'Titulo', 'required' =>'required', 'id' => 'titulo')) }}
	    <br/>

		<textarea name="texto" id="texto" cols="30" rows="10">{{ $artigo->texto }}</textarea>
		<select id="id_categoria" name="id_categoria">	
			@foreach ($categorias as $categoria)
				@if ($categoria->id == $artigo->id_categoria)
					<option selected value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
				@else
					<option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
				@endif
			@endforeach
		</select>

	    {{ Form::submit('Salvar', array('class' => 'botao botao-sucesso botao-maior')) }}
	    <a href="{{ url('artigos') }}" title="Cancelar" class="botao">Cancelar</a>
	</div>
 
{{ Form::close() }}
@stop
