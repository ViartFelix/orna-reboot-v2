<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <nav>
            <a href="/">home</a>
            <a href="/baguette">baguette</a>
        </nav>
        
        <div id="app">
            @yield('content')
        </div>
        
        @yield('script')
    </body>
</html>
