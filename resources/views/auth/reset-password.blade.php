<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha | Área Administrativa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="flex flex-row items-center gap-4 mt-10 px-10 max-w-6xl mx-auto">
        <a href="{{ route('login') }}" class="flex flex-row p-2 items-center gap-3 rounded-xl">
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
            <h1 class="text-xl font-semibold">Redefinir senha</h1>
            <p class="text-gray-600 text-sm">
                Crie uma nova senha para sua conta
            </p>
        </div>

        @if (session('status'))
            <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg text-sm w-full">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg text-sm w-full">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="w-full">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Nova Senha</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Digite sua nova senha">
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-gray-700">Confirmar Nova Senha</label>
                <input
                    type="password"
                    name="password_confirmation"
                    required
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Confirme sua nova senha">
            </div>

            <button type="submit"
                class="w-full bg-black text-white p-3 rounded-xl hover:bg-[#00238d] transition">
                Redefinir senha
            </button>
        </form>
    </div>

</body>
</html>
