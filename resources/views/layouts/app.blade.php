<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toma Cupom</title>

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

</head>
<body>

    {{-- Cabeçalho global --}}
    <x-cabecalho />

    {{-- Conteúdo dinâmico --}}
    <main>
        @yield('content')
    </main>
    
</body>
</html>
