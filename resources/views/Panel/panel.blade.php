<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Painel Administrativo') | Achados e Perdidos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <!-- Header Global usando component existente -->
    <x-header title="Painel Administrativo" />

    <!-- Área do Painel -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @yield('content')
    </main>
</body>
</html>