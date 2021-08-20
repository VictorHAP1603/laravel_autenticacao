<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>

    <body>
        <header>
            <h1>Header</h1>
            <hr>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <hr>
            ...
        </footer>
    </body>
</html>
