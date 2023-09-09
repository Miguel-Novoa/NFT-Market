<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/reset.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
        @section('blockCSS')
        <title>@yield('titrePage')</title>
        @show
    </head>
    <body class="antialiased">
        @yield('body')
    </body>
</html>
