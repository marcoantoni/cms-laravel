<?php

class ArtigosController extends \BaseController {
	public function index()
	{
		$artigos = Artigos::get();
        return View::make('artigos.index', compact('artigos'));
	}


	public function create()
	{
		$categorias = Categoria::get();
		return View::make('artigos.inserir')->with('categorias', $categorias);
	}


	public function store()
	{
		/*$rules = [
			'titulo' => 'required',
			'texto' => 'required'
		];
		//  regras de validação
		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation->messages());	// volta para a página anterior
		}*/




			return Input::get('titulo');
			/*$artigo = new Artigos();
			$artigo->titulo = Input::get('titulo');
			$artigo->texto = Input::get('texto');
			$artigo->status = 1;
			$artigo->id_usuario = 1;
			$artigo->id_categoria = Input::get('id_categoria');
					
			$artigo->save();*/	
			//return Redirect::route('artigos.index');


	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		
	}


}
