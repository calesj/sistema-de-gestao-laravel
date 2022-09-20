<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <!-- vai imprimir o section('titulo') aqui dentro do yield() -->
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
        <!-- incluindo o arquivo 'partials.topo' para ser imprimido aqui -->
        @include('app.layouts._partials.topo')

        <!-- vai imprimir o section('conteudo') aqui dentro do yield() -->
        @yield('conteudo')
    </body>
</html>
