<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo asset('css/theme.css')?>" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <div id="navbar">
        <div id="navbar-logo">
            <p>LOGO</p>
        </div>
        <div id="filler"></div>
        <a href="/" class="button">
            Home
        </a>
        <a href="/html" class="button">
            HTML
        </a>
        <a href="/css1" class="button">
            CSS
        </a>
        <a href="/laravel" class="button">
            Laravel
        </a>
    </div>

    @yield('content')



    {{-- O Laravel já dispõe de um objeto chamado "Errors Bag", ($errors abaixo) que armazena todos os erros da sessão. Abaixo, o if é acionado caso algum erro esteja presente.--}}
    @if ($errors->any())
        {{-- Para cada erro, a informação é passada para a variável $error e o foreach é repetido--}}
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    @yield('lista')


</body>
</html>