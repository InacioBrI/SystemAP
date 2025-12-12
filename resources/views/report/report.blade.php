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
                Reportar Item Perdido
            </h1>
        </a>

    </div>

    
    <div class="max-w-4xl mx-auto px-6 py-8">

        <div class="mt-6 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded-lg text-[15px]">
            <label class="block mb-2 font-medium text-gray-700">Dica</label>

            <p>Preencha todas as informações com o máximo de detalhes para aumentar as chances de encontrar seu item perdido.</p>
        </div>
        
        <form action="" method="POST" enctype="multipart/form-data " class="bg-white shadow-md rounded-lg p-6 mt-6">
            @csrf
            
            <div class="mb-6">

                <h1 class="mb-4 text-lg font-semibold">
                    Informações do Item Perdido
                </h1>

                <label class="block mb-2 font-medium text-gray-700">
                    Nome do Item
                </label>
                <input 
                    type="text" 
                    name="nome" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Ex: Carteira preta, mochila azul..."
                >
    
                <label class="block mb-2 font-medium text-gray-700">
                    Categoria
                </label>
                <select 
                    name="categoria" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                >
                    <option value="">Selecione...</option>
                    <option value="documentos">Documentos</option>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="roupas">Roupas</option>
                    <option value="outros">Outros</option>
                </select>
    
                <label class="block mb-2 font-medium text-gray-700">
                    Descrição do Item
                </label>
                <textarea
                    name="descricao"
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Descreva o item com detalhes..."
                ></textarea>
    
                <label class="block mb-2 font-medium text-gray-700">
                    Local onde o item foi perdido
                </label>
                <input 
                    type="text" 
                    name="local"
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Ex: Biblioteca, Cantina..."
                >
    
                <label class="block mb-2 font-medium text-gray-700">
                    Data em que o item foi perdido
                </label>
                <input 
                    type="date"
                    name="data"
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                >
    
                <label class="block mb-2 font-medium text-gray-700">
                    Foto do item (opcional)
                </label>
                <input 
                    type="file" 
                    name="imagem"
                    class="w-full border border-gray-300 p-3 rounded-xl mb-8"
                >
    
            </div>

            <div>
                <hr class="my-6 border-gray-300 mb-8">
            </div>

            <div class="mb-6">

                <h1 class="mb-4 text-lg font-semibold">
                    Suas Informações de Contato
                </h1>

                <label class="block mb-2 font-medium text-gray-700 mt-4">
                    Nome Completo
                </label>
                <input 
                    type="text" 
                    name="contato_nome" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Seu nome completo"
                > 

                <label class="block mb-2 font-medium text-gray-700">
                    E-mail
                </label>
                <input 
                    type="email" 
                    name="contato_email" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Seu e-mail"
                >

                <label class="block mb-2 font-medium text-gray-700">
                    Telefone
                </label>
                <input 
                    type="tel" 
                    name="contato_telefone" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Seu telefone"
                >
                
                <label class="block mb-2 font-medium text-gray-700">
                    RM (obrigatório)
                </label>
                <input 
                    type="text" 
                    name="contato_rm" 
                    class="w-full border border-gray-300 p-3 rounded-xl mb-5"
                    placeholder="Seu RM"
                >

            </div>

            <button 
                class="w-full bg-blue-600 text-white py-3 rounded-xl hover:bg-blue-700 transition"
            >
                Enviar Relatório
            </button>

        </form>


    </div>
    



</body>
</html>