<header class="w-full flex items-center justify-between px-30 py-4 border-b bg-[#00238d]">

    <div class="flex items-center space-x-3">
         <img class="w-[60px] h-[60px]" src="LogoFebasp.png" alt=""><!--logo belas artes  -->

        <h1 class="text-xl  font-medium text-[#ffffff]">
            {{ $title ?? 'Achados e Perdidos' }}
        </h1>
    </div>

    <div class="flex items-center space-x-6">

        @auth
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="p-2 rounded-full hover:bg-blue-800/10 border border-[#ffffff] transition-all duration-300 cursor-pointer" title="Sair">
                    <svg class="w-7 h-7 text-[#ffffff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="p-2 rounded-full hover:bg-blue-800/10 border border-[#ffffff] transition-all duration-300 cursor-pointer" title="Login">
                <x-heroicon-s-user class="w-6 h-6 text-[#ffffff]"/>
            </a>
        @endguest

    </div>
</header>
