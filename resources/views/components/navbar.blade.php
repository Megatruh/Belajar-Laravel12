<nav id="navbar" class="bg-gray-800 fixed top-0 left-0 right-0 z-50 transition-transform duration-300 ease-in-out">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
            <div class="shrink-0">
                <img src="{{ asset('IMG/newLogo.png') }}" alt="Your Company" class="size-10" />
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                <x-nav-link href="/" :current="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/blog" :current="request()->is('blog')">Blog</x-nav-link>
                <x-nav-link href="/about" :current="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :current="request()->is('contact')">Contact</x-nav-link>
                {{-- <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a> --}}

                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="ml-3 flex items-center md:ml-6">

                <form class="w-72 mx-auto" action="/search" method="GET">
                    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                        </div>
                        <input
                            type="text"
                            id="search"
                            name="keyword"
                            x-ref="searchInput"
                            autocomplete="off"
                            class="block w-full py-1.5 px-3 ps-9 bg-white/10 border border-white/20 text-white text-sm rounded-md focus:ring-gray-500 focus:border-gray-500 placeholder:text-gray-400 hover:bg-white/15 transition-colors"
                            placeholder="Search Tittle">
                        <button
                            type="button"
                            class="absolute end-1 top-1/2 -translate-y-1/2 text-gray-300 bg-gray-700 hover:bg-gray-600 border border-gray-600 focus:ring-2 focus:ring-gray-500 font-medium rounded text-xs px-3 py-1 focus:outline-none transition-colors">Search</button>
                    </div>
                </form>

                <!-- Profile dropdown -->
                <el-dropdown class="relative ml-3">
                <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    {{-- <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span> --}}
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
                </button>

                <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
                </el-menu>
                </el-dropdown>
            </div>
        </div>
        <div class="-mr-2 flex md:hidden">


        <!-- Mobile menu button -->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        </div>
    </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <x-nav-link class="block" href="/" :current="request()->is('/')">Home</x-nav-link>
        <x-nav-link class="block" href="/blog" :current="request()->is('blog')">Blog</x-nav-link>
        <x-nav-link class="block" href="/about" :current="request()->is('about')">About</x-nav-link>
        <x-nav-link class="block" href="/contact" :current="request()->is('contact')">Contact</x-nav-link>
    </div>
    <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
        <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
        </div>
        <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
        </div>

        </div>
        <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your profile</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign out</a>
        </div>
    </div>
    </el-disclosure>
</nav>
