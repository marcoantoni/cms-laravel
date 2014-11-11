<?php

//EVITA ATAQUES DE -> http://pt.wikipedia.org/wiki/Cross-site_request_forgery
Route::when('*', 'csrf', array('post'));
 
//ROTAS PARA ENTRAR/SAIR
Route::get('entrar', 'HomeController@getEntrar');
Route::post('entrar', 'HomeController@postEntrar');
Route::get('sair', 'HomeController@getSair');



Route::group(array('before' => 'auth'), function(){
    // ROTA DE CATEGORIAS
    Route::controller('categorias', 'CategoriaController');
    
    //VERIFICA SE O USUÁRIO LOGADO É ADMIN, SE FOR, ELE PODE CADASTRAR NOVOS USUÁRIOS
    Route::group(array('before' => 'auth.admin'), function()
    {
        Route::controller('usuarios', 'UsuariosController');
    });   

});

// resource() mapeia as url's de funções RESTful
Route::resource('artigos', 'ArtigosController'); 
