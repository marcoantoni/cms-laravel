<?php

class ComentariosController extends \BaseController {

	public function index()
	{
		$comentarios = Comentario::buscar();
        return View::make('comentarios.index', compact('comentarios'));
	}

	public function create()
	{
		$artigos = Artigo::get();
		return View::make('comentarios.inserir')->with('artigos', $artigos);
	}

	public function store()
	{
		$comentario = new Comentario();
		$comentario->nome = Input::get('nome');
		$comentario->comentario = Input::get('comentario');
		$comentario->status = Input::get('status');
		$comentario->artigo = Input::get('artigo');
		$comentario->save();
		return Redirect::route('comentarios.index');
	}

	public function edit($id)
	{
		$comentario = Comentario::find($id);
		$artigos = Artigo::get();
		return View::make('comentarios.editar')->with('comentario', $comentario)->with('artigos', $artigos);
	}

	public function update($id)
	{
		$comentario = Comentario::find($id);
      	$comentario->nome = Input::get('nome');
		$comentario->comentario = Input::get('comentario');
		$comentario->status = Input::get('status');
		$comentario->artigo = Input::get('artigo');
		$comentario->save();

        return Redirect::to('/comentarios');
	}

	public function destroy($id)
	{
		$comentario = Comentario::find($id);
        $comentario->delete();

        return Redirect::to('/comentarios');
	}

}
