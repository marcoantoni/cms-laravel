<?php
    class Comentario extends Eloquent {
        public function scopeBuscar($query)
        {
            return $query
            ->Leftjoin('artigos', 'artigos.id', '=' , 'comentarios.artigo')
            ->select('comentarios.*', 'artigos.titulo')
            ->get();
        }
    }
?>