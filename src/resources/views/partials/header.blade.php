<div class="header-2">
    <nav class="bg-white py-2 md:py-4">
        <div class="container px-4 mx-auto md:flex md:items-center">
            <!--  -->
            <div class="flex justify-between items-center">
                <a href="#" class="font-bold text-xl text-green-900 hover:underline">Bois de l'Ouest</a>
                <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">

                <x-button href="{{route('home')}}" :active="Request::routeIs('home')">
                    Accueil
                </x-button>

                <x-button href="{{route('about')}}" :active="Request::routeIs('about')">
                    A propos
                </x-button>

                <x-button href="{{route('faq')}}" :active="Request::routeIs('faq')">
                    FAQ
                </x-button>

                @auth
                <!-- Authentication -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="items-center p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">
                        {{ __('Se déconnecter') }}
                    </button>
                </form>
                @endauth

                @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Se connecter</a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">S'inscrire</a>
                @endif
                @endguest

            </div>
        </div>
    </nav>
</div>
