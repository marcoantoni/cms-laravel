<?php 
	class Artigo extends Eloquent {		
		public function scopeBuscar($query)
	    {
	        return $query
	        ->Leftjoin('categorias', 'artigos.id_categoria', '=' , 'categorias.id')
	        ->select('artigos.*', 'categorias.nome as categoria')
	        ->get();
	    }		
	}	
?>