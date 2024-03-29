<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 col-3 p-0 border-end">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div>   
            <div>
                <!-- Logo -->
                <div class="p-6">
                    <a href="{{ route('dashboard') }}">
                        <span class="text-cyan">BLOB</span> le Blog
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden d-sm-flex flex-column">
                    <div class="px-4 py-3">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <i class="fa-solid fa-house me-2"></i> {{ __('Accueil') }}
                        </x-nav-link>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="px-4 py-3">
                                <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                                    <i class="fa-solid fa-user me-2"></i> {{ __('Profil') }}
                                </x-nav-link>
                            </div>
                            <div class="px-4 py-3">
                                <x-nav-link :href="route('account')" :active="request()->routeIs('account')">
                                    <i class="fa-solid fa-plus me-2"></i> {{ __('Créer un article') }}
                                </x-nav-link>
                            </div>
                            <div class="px-4 py-3">
                                <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.index')">
                                    <i class="fa-solid fa-pen me-2"></i> {{ __('Éditer mes articles') }}
                                </x-nav-link>
                            </div>
                            <!-- Authentication -->
                            <div class="px-4 py-3">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="text-danger">
                                        <i class="fa-solid fa-power-off me-2"></i> {{ __('Déconnexion') }}
                                    </x-nav-link>
                                </form>
                            </div>
                        @else
                            <div class="px-4 py-3">
                                <a href="{{ route('login') }}" class="font-semibold hover:text-cyan">Se connecter</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="px-4 py-3">
                                    <a href="{{ route('register') }}" class="font-semibold hover:text-cyan">Créer un compte</a>
                                </div>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
