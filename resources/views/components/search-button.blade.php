{{-- Floating Search Button (Mobile Only) --}}
<div x-data="{ open: false }" class="fixed bottom-6 right-6 z-50 md:hidden">
    {{-- Floating Button --}}
    <button
        @click="open = true"
        class="flex items-center justify-center w-14 h-14 bg-gray-800 hover:bg-gray-900 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-gray-500"
        aria-label="Search"
    >
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
        </svg>
    </button>

    {{-- Search Modal/Popup --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="open = false"
        class="fixed inset-0 z-50 flex items-start justify-center pt-20 px-4"
        style="display: none;"
    >
        {{-- Backdrop --}}
        <div
            @click="open = false"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm"
        ></div>

        {{-- Search Box --}}
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 -translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 -translate-y-4"
            class="relative w-full max-w-2xl bg-white rounded-xl shadow-2xl overflow-hidden"
            @click.away="open = false"
        >
            <form action="/search" method="GET" class="relative">
                <div class="flex items-center">
                    <div class="pl-4">
                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input
                        type="text"
                        name="keyword"
                        x-ref="searchInput"
                        x-init="$watch('open', value => { if(value) setTimeout(() => $refs.searchInput.focus(), 100) })"
                        placeholder="Cari artikel..."
                        class="w-full px-4 py-4 text-lg border-0 focus:ring-0 focus:outline-none placeholder-gray-400"
                        autocomplete="off"
                    >
                    <button
                        type="submit"
                        class="mr-3 px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium transition-colors rounded focus:outline-none focus:ring-4 focus:ring-blue-500"
                    >
                        Cari
                    </button>
                </div>
            </form>

            {{-- Keyboard Hint --}}
            <div class="px-4 py-2 bg-gray-50 border-t text-sm text-gray-500 flex items-center justify-between">
                <span>Tekan <kbd class="px-2 py-1 bg-gray-200 rounded text-xs font-mono">ESC</kbd> untuk menutup</span>
                <span>Tekan <kbd class="px-2 py-1 bg-gray-200 rounded text-xs font-mono">Enter</kbd> untuk mencari</span>
            </div>
        </div>
    </div>
</div>
