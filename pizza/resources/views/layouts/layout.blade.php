<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">
        
    </head>

    <body class="antialiased" styles = "background-color : blue">
            @yield('content')
    </body>

    <footer>
            Copirite @2020 Pizza By Usman
    </footer>

</html>