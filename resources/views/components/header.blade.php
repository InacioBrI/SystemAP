<header class="w-full flex items-center justify-between px-20 py-4 border-b bg-white">

    <div class="flex items-center space-x-3">
         <img class="w-[50] h-[50px]" src="LogoFebasp.jpg" alt=""><!--logo belas artes  -->

        <h1 class="text-xl font-medium text-[#155dfc]">
            {{ $title ?? 'Achados e Perdidos' }}
        </h1>
    </div>

    <div class="flex items-center space-x-6">

        {{-- Ícone de Configurações (Login ou Config) --}}
        @auth
            <a href="{{ route('account.settings') }}">
                <x-heroicon-o-cog class="w-7 h-7 text-black" />
            </a>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="p-2 rounded-full hover:bg-blue-800/10 border border-[#155dfc] transition-all duration-300">
                <x-heroicon-s-user class="w-6 h-6 text-[#155dfc]"/>
            </a>
        @endguest

    </div>
</header>

