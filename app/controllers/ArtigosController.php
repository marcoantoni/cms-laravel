<?php

class ArtigosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artigos = Artigo::buscar();		
        return View::make('artigos.index', compact('artigos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = Categoria::get();
		return View::make('artigos.inserir')->with('categorias', $categorias);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$artigo = new Artigo();
		$artigo->titulo = Input::get('titulo');
		$artigo->texto = Input::get('texto');
		$artigo->status = Input::get('status');;
		$artigo->id_usuario = Auth::id();
		$artigo->id_categoria = (Input::get('id_categoria') == null?null:Input::get('id_categoria'));
		$artigo->save();
		return Redirect::route('artigos.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "show";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$artigo = Artigo::find($id);
		$categorias = Categoria::get();
		return View::make('artigos.editar')->with('artigo', $artigo)->with('categorias', $categorias);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artigo = Artigo::find($id);
		$artigo->titulo = Input::get('titulo');
		$artigo->texto = Input::get('texto');
		$artigo->status = Input::get('status');;
		$artigo->id_usuario = Auth::id();
		$artigo->id_categoria = (Input::get('id_categoria') == null?null:Input::get('id_categoria'));
		$artigo->save();
		return Redirect::route('artigos.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$artigo = Artigo::find($id);
        $artigo->delete();
 
        return Redirect::to('/artigos');
	}


}
