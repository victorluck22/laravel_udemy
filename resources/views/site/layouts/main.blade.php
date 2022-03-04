<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('tittle')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    </head>

    <body>
        @include('site.layouts._partials.top')
        @yield('conteudo')

        @include('site.layouts._partials.foot')
    </body>
</html>
