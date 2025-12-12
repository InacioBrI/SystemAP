<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex flex-row items-cente gap-4 mt-15 px-70 m-auto space-y-6">

        <a href="{{ route("layout") }}" class="flex flex-row p-2 items-center gap-3 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" 
                stroke-width="1.5" stroke="currentColor"
                class="w-5 h-5 text-gray-700 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            
            <h1 class="text-[20px]  text-gray-800 select-none font-normal">
                Voltar
            </h1>
        </a>

    </div>

    <div class="flex flex-col items-center justify-center mt-10 bg-white shadow-md rounded-lg p-6 mx-140 border border-gray-300">
        <div class=" px-5 py-5  m-3 bg-[#d4e2ff] rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-[#d4e2ff] text-[#00238d] " >
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
        </div>
        <div class="flex flex-col items-center ">
            <h1>Area administrativa</h1>
            <p>Faça login para acessar o painel administrativo</p>
        </div>
        
        <form action="" method="POST" class="w-full max-w-sm mt-6"> 
            @csrf
            
            <div class="mb-4">
                <label class="block mb-2 font-medium text-gray-700">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Seu email"
                >
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-medium text-gray-700">Senha</label>
                <input 
                    type="password" 
                    name="password" 
                    class="w-full border border-gray-300 p-3 rounded-xl"
                    placeholder="Sua senha"
                >
            </div>
            <button type="submit" class="w-full bg-black text-white p-3 rounded-xl hover:bg-[#00238d] transition duration-300">
                Entrar
            </button>
        </form>
    </div>

</body>
</html>