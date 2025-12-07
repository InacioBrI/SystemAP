<header class="w-full flex items-center justify-between px-30 py-4 border-b bg-[#00238d]">

    <div class="flex items-center space-x-3">
         <img class="w-[60px] h-[60px]" src="LogoFebasp.png" alt=""><!--logo belas artes  -->

        <h1 class="text-xl  font-medium text-[#ffffff]">
            {{ $title ?? 'Achados e Perdidos' }}
        </h1>
    </div>

    <div class="flex items-center space-x-6">

        {{-- Ícone de Configurações (Login ou Config) --}}
        @auth
            <a href="{{ route('account.settings') }}">
                <x-heroicon-o-cog class="w-7 h-7 text-[#ffffff]" />
            </a>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="p-2 rounded-full hover:bg-blue-800/10 border border-[#ffffff] transition-all duration-300">
                <x-heroicon-s-user class="w-6 h-6 text-[#ffffff]"/>
            </a>
        @endguest

    </div>
</header>

