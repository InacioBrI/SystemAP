<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Área Administrativa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="flex flex-row items-center gap-4 mt-10 px-10 max-w-6xl mx-auto">
        <a href="{{ route('layout') }}" class="flex flex-row p-2 items-center gap-3 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor"
                class="w-5 h-5 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <span class="text-gray-800 hover:text-gray-600">Voltar</span>
        </a>
    </div>

    <div class="flex flex-col items-center justify-center mt-10 bg-white shadow-md rounded-lg p-6 max-w-md mx-auto border border-gray-300">

        <div class="p-4 bg-[#d4e2ff] rounded-full mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-[#00238d]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
        </div>

        <div class="text-center mb-6">
            <h1 class="text-xl font-semibold">Área administrativa</h1>
            <p class="text-gray-600 text-sm">
                Faça login para acessar o painel administrativo
            </p>
        </div>

        <form action="{{ route('login.submit') }}" method="POST" class="w-full">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Email</label>
                <input
                    type="email"
                    name="email"
                    required
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Seu email">
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Senha</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Sua senha">
            </div>

            <div class="flex justify-end mb-4">
                <a href="{{ route('password.request') }}"
                   class="text-sm text-[#00238d] hover:underline">
                    Esqueci a senha
                </a>
            </div>

            <button type="submit"
                class="w-full bg-black text-white p-3 rounded-xl hover:bg-[#00238d] transition">
                Entrar
            </button>
        </form>
    </div>

</body>
</html>
