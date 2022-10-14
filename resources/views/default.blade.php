<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
         <!-- L'élément HTML d'identifiant "app" -->
        <div id="app">
            @yield('yoyoyo')
        </div>

        <a href="/">home</a>
        <a href="/test/">test</a>        

        @yield('script')
    </body>
</html>
