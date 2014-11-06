<?php 

class CategoriaController extends BaseController {
    public function getIndex(){
        $categorias    = Categoria::get();
        return View::make('categorias.index', compact('categorias'));
    }

    public function getInserir(){              
        return View::make('categorias.inserir');
    } 
    
    public function postInserir(){
        $categoria = new Categoria(); 
        $categoria->nome  = Input::get('nome');        
        $categoria->save();
        
        return Redirect::to('/categorias');   
    }  
   
    public function getEditar($id){
        $categoria  = Categoria::find($id);
        return View::make('categorias.editar', compact('categoria'));
    }
    
    public function postEditar(){
        $categoria = Categoria::find(Input::get('id'));
 
        $categoria->nome   = Input::get('nome');
        $categoria->save();
 
        return Redirect::to('/categorias');
    }   

    public function getRemover($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
 
        return Redirect::to('/categorias');
    }    	
}

