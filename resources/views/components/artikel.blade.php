{{-- 
    TODO : 
    - tambah tombol search yang mengambang di pojok kanan bawah, kalau di klik muncul form search yang bisa diisi untuk mencari artikel berdasarkan judul atau isi artikel
 --}}
<article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <a href="/category/{{ $posts->category->slug}}">
            <span class="{{ $posts->category->color }} text-xs font-medium inline-flex items-center px-2.25 py-0.75 rounded">
                {{ $posts->category->name }}
            </span>
        </a>
        <span class="text-sm">
            {{ $posts->created_at->diffForHumans() }}
        </span> {{-- -Hapus kolom tanggal, terus ambil data dari created at --}}
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        <a href="/blog/{{ $posts['slug']}}">
            {{ $posts->title }}
        </a>
    </h2>
    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
        {{ Str::limit($posts->body, 100) }}
    </p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <a href="/author/{{ $posts->author->username }}" class="flex items-center space-x-2">
            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $posts->author->name }}" />
                <span class="font-xs dark:text-white">
                    {{ $posts->author->name }}
                </span>
            </a>
        </div>
        <a href="/blog/{{ $posts['slug']}}" class="inline-flex items-center font-xs text-blue-600 dark:text-primary-500 hover:underline">
            Read more
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>
