<nav x-data="{ open: false }" class="bg-white fixed w-full shadow-sm top-0">

    <!-- Primary Navigation Menu -->
    <div class="max-w px-3 text-sm lg:text-base sm:px-5 lg:px-7">
        <div class="flex justify-between h-16 sm:h-20">
            <div class="flex">

                <!-- Logo -->
                <div class="flex items-center justify-center text-lg md:text-xl">
                    <a href="/dashboard" class="flex items-center justify-center uppercase">
                        <h1 class="cormorant-garamond-bold">Fotozona</h1>
                        <h1 class="cormorant-garamond-light-italic">Baltic</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px md:ms-10 md:flex">
                    <x-nav-link href="/dashboard">
                        {{ __('Galvena') }}
                    </x-nav-link>
                    <x-nav-link href="/shop">
                        {{ __('Katalogs') }}
                    </x-nav-link>
                    <x-nav-link href="/portfolio">
                        {{ __('Portfolio') }}
                    </x-nav-link>
                    <x-nav-link href="/contacts">
                        {{ __('Kontakti') }}
                    </x-nav-link>
                </div>
            </div>


            <!-- Nav Icons -->
            <div class="hidden space-x-2 md:flex md:items-center">
                <a href="mailto: info@fotozonas.org"
                    class="flex justify-center items-center hover:cursor-pointer p-1 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                </a>
                <a href="tel: +37129493169" target="_blank"
                    class="flex justify-center items-center hover:cursor-pointer p-1 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    <span class="material-symbols-outlined">
                        call
                    </span>
                </a>
            </div>

            <!-- Nav Icons&Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <div class="flex md:hidden items-center">
                    <a href="mailto: info@fotozonas.org"
                        class="flex justify-center items-center hover:cursor-pointer p-1 rounded-md text-gray hover:text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-black transition duration-150 ease-in-out">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                    </a>
                    <a href="tel: +37129493169" target="_blank"
                        class="flex justify-center items-center hover:cursor-pointer p-1 rounded-md text-gray hover:text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-black transition duration-150 ease-in-out">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                    </a>
                </div>
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-1 rounded-md text-gray hover:text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-black transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="/dashboard">
                {{ __('Galvena') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/shop">
                {{ __('Katalogs') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/portfolio">
                {{ __('Portfolio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/contacts">
                {{ __('Kontakti') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
