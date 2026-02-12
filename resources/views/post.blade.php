<x-layout :title="$title">
    <article class="py-1 max-w-screen-md border-b border-gray-300">
        <div class="text-base text-gray-400 ">
            <h3 class="pb-2 text-gray-900">
                <a href="/category/{{ $post->category->slug}}" class="hover:underline">{{ $post->category->name }}</a> > {{ $post['title'] }}
            </h3>
            <a href="/author/{{ $post->author->username}}">{{ $post->author->name }}</a> <a href="/city/{{ $post->city }}">| {{ $post->city }}</a> <a href="/date/{{ $post->date }}">| {{ $post->date }}</a>
        </div>
        <p class="my-3 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>
</x-layout>
