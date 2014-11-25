<div class="container">
    <div class="col-12">
        <nav>
            <ul class="menu">
                @if(Auth::check())
                    <li class="menu-item">
                        <a href="{{ url('artigos') }}">Artigos</a>
                    </li>                

                    <li class="menu-item">
                        <a href="{{ url('categorias') }}">Categorias</a>
                    </li>                


                    <li class="menu-item">
                        <a href="{{ url('comentarios') }}">Comentários</a>
                    </li>                

                    @if(Auth::user()->tipo == 'admin')
                        <li class="menu-item">
                            <a href="{{ url('usuarios') }}">Usuários</a>
                        </li>  
                    @endif
                @endif

                @if(Auth::check())
                    <li class="menu-item">
                        <a href="{{ url('sair') }}">--SAIR--</a>
                    </li>
                @endif            
            </ul>
        </nav>
    </div>
</div>
