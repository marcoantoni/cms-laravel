<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Administrativo Blog')</title>    
    <link rel="stylesheet" href="{{ asset('assets/framework.css') }}">
</head>
    <body>        
        <div class="container">
            @yield('conteudo')
        </div>        
    </body>
</html>