<!-- Filtros e Busca -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-4 mb-6">
    <div class="flex flex-col sm:flex-row gap-4">
        <!-- Campo de Busca -->
        <div class="flex-1">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" placeholder="Buscar itens..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
        </div>
        
        <!-- Filtros -->
        <div class="flex gap-2">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option>Status</option>
                <option>Aguardando</option>
                <option>Em Análise</option>
                <option>Devolvidos</option>
            </select>
            
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option>Categoria</option>
                <option>Eletrônicos</option>
                <option>Documentos</option>
                <option>Outros</option>
            </select>
            
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option>Data</option>
                <option>Hoje</option>
                <option>Esta semana</option>
                <option>Este mês</option>
            </select>
        </div>
    </div>
</div>
