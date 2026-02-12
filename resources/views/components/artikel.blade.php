<article class="py-4 max-w-screen-md ">
    <h2 class="mb-1 text-3xl font-bold text-gray-900">
        <a href="/blog/{{ $posts['slug'] }}" class="hover:underline">
            {{ $posts['title'] }}
        </a>
    </h2>
    <a href="/category/{{ $posts->category->slug}}" class="hover:underline">{{ $posts->category->name }}</a>
    <div class="text-base text-gray-400">
        <a href="/author/{{ $posts->author->username}}">{{ $posts->author->name }}</a> <a href="/city/{{ $posts->city }}">| {{ $posts->city }}</a> <a href="/date/{{ $posts->date }}">| {{ $posts->date }}</a>
    </div>
    <p class="my-3 font-light">{{ Str::limit($posts['body'], 100) }}</p>
    <a href="/blog/{{ $posts['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
</article>
{{-- TODO :  --}}
{{-- [DONE] buat routes untuk menampilkan post berdasarkan author, city, dan date --}}
{{-- perbaiki agar cara akses route yang berdasarkan author tidak menggunakan id --}}
