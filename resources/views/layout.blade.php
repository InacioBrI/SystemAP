<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('components.header', [
        'title' => 'Achados e Perdidos',
    ])

    <div class="Flex flex-col items-center justify-center mt-10 px-70 m-auto space-y-6">
        
        <div class="flex flex-auto items-center justify-center bg-[#00238d] h-25 text-amber-50 border rounded-xl p-4">
            <h1>Perdeu algo na universidade? Estamos aqui para ajudar você a encontrar.</h1>
        </div>

        <a href="{{ route('report') }}" class="flex flex-row items-center justify-center bg-transparent h-35 border rounded-xl p-4 hover:border-blue-800 hover:bg-blue-800/10 transition-all duration-300 gap-2">
            <div class=" px-5 py-5  m-3 bg-[#FFEDD4] rounded-full">
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-[#FFEDD4] rounded-full text-[#F54A00] " >
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
            </div>
            <div class="flex flex-nowrap items-center justify-center"> 
                <h1>Registre um item que você perdeu</h1>
            </div>
        </a>


    </div>
</body>
</html>