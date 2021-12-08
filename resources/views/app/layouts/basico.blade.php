<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/styles_basic.css') }}" />

</head>

<body>
    @include('app.layouts._partials.topo')
    @yield('conteudo')
</body>

</html>
