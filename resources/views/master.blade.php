<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo asset('css/theme.css')?>" type="text/css">
</head>
<body>


    <div id="navbar">
        <div id="navbar-logo">
            <p>LOGO</p>
        </div>
        <div id="filler"></div>
        <a href="/" class="button-home">
            Home
        </a>
        <a href="/html" class="button-home">
            HTML
        </a>
        <a href="/css1" class="button-home">
            CSS
        </a>
        <a href="/laravel" class="button-home">
            Laravel
        </a>
    </div>

    @yield('content')


</body>
</html>