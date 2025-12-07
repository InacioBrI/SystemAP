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

    <div class="flex flex-row items-center gap-4 mt-15 px-70 m-auto space-y-6">
        
        <a href="" class="flex flex-row items-center gap-3 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" 
                stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 text-gray-700 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            
            <h1 class="text-[20px] font-medium text-gray-800 select-none hover:underline">
                Reportar Item Perdido
            </h1>
        </a>

    </div>

</body>
</html>