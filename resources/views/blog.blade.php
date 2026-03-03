<x-layout :title="$title">
    <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-2 lg:px-6">
        <form class="max-w-2xl mx-auto my-4 border-gray-500" method="GET">
            @if (request('category'))
                <input
                    type="hidden"
                    name="category"
                    value="{{ request('category')}}"
                />
            @endif
            @if (request('author'))
                <input
                    type="hidden"
                    name="author"
                    value="{{ request('author')}}"
                />
            @endif
            @if (request('city'))
                <input
                    type="hidden"
                    name="city"
                    value="{{ request('city')}}"
                />
            @endif
            <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                </div>
                <input
                    autocomplete="off"
                    type="search"
                    id="search"
                    name="keyword"
                    class="block w-full p-3 ps-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                    placeholder="Search Title ..." />
                <button type="submit" class="bg-gray-800 absolute end-1.5 bottom-1.5 text-white hover:bg-gray-500 box-border hover:text-gray-900 border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Search</button>
            </div>
        </form>

        {{ $posts->links() }}

        <div class="mt-6 grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            @forelse($posts as $post)
                <x-artikel :posts="$post" />
            @empty
                <p class="text-center text-gray-500">No posts found. <a href="/blog" class="text-blue-500 hover:underline">Back to Blog</a></p>
            @endforelse
        </div>
    </div>
</x-layout>
