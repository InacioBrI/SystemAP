<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="flex flex-col items-center justify-center mt-20 bg-white shadow-md rounded-lg p-6 mx-140 border border-gray-300">

    <h1 class="text-lg font-medium mb-2">Esqueceu sua senha?</h1>
    <p class="text-sm text-gray-600 mb-6">
        Informe seu email para receber o link de redefinição
    </p>

    @if (session('status'))
        <div class="mb-4 text-green-600 text-sm">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 text-red-600 text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="w-full max-w-sm">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Email</label>
            <input
                type="email"
                name="email"
                class="w-full border border-gray-300 p-3 rounded-xl"
                required
            >
        </div>

        <button type="submit"
            class="w-full bg-black text-white p-3 rounded-xl hover:bg-[#00238d] transition">
            Enviar link
        </button>
    </form>

</div>

</body>
</html>
