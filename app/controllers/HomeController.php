<?php
 
class HomeController extends BaseController {
 
    public function getIndex()
    {
        if(Auth::check())
            return Redirect::to('artigos');
        else
            return View::make('home/entrar');     
    }
 
    public function getEntrar()
    {
        return View::make('home/entrar');
    }
 
    public function postEntrar()
    {
        // Opção de lembrar do usuário
        $remember = false;
        if(Input::get('remember'))
        {
            $remember = true;
        }
        
        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('email'), 
            'password' => Input::get('senha')
            ), $remember))
        {
            return Redirect::to('artigos');
        }
        else
        {
            return Redirect::to('entrar')
                ->with('flash_error', 1)
                ->withInput();
        }
    }
    
    public function getSair()
    {
        Auth::logout();
        return Redirect::to('/artigos');
    }
}