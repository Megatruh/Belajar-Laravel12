<x-layout :title="$title">
    {{-- <article class="py-1 max-w-screen-md border-b border-gray-300">
        <div class="text-base text-gray-400 ">
            <h3 class="pb-2 text-gray-900">
                <a href="/category/{{ $post->category->slug}}" class="hover:underline">{{ $post->category->name }}</a> > {{ $post['title'] }}
            </h3>
            <a href="/author/{{ $post->author->username}}">{{ $post->author->name }}</a> <a href="/city/{{ $post->city }}">| {{ $post->city }}</a> <a href="/date/{{ $post->date }}">| {{ $post->date }}</a>
        </div>
        <p class="my-3 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article> --}}
    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/category/{{ $post->category->slug}}">
                    <span class="text-base text-gray-500 {{ $post->category->color }} mb-2 inline-block">
                        {{ $post->category->name }}
                    </span>
                </a>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $post->title }}
                </h1>
            </header>

            <a href="/city/{{ $post->city }}" class="text-base text-gray-500 hover:underline no-underline">
                <span class="text-base text-gray-500">
                    {{ $post->city }}
                </span>
            </a>
            <span class="text-base text-gray-500">| {{ $post->created_at->diffForHumans() }}</span>

            <p class="leading-relaxed">
                {!! nl2br(e($post->body)) !!}
            </p>
            <address class="flex items-center mb-6 not-italic">
                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                    <img class="mr-4 w-18 h-18 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                    <div class="">
                        <a href="/author/{{ $post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white block no-underline">
                            {{ $post->author->name }}
                        </a>
                        <p class="text-base text-gray-500 dark:text-gray-400">
                            <time pubdate datetime="2022-02-08" title="February 8th, 2022">
                                {{ $post->created_at->diffForHumans() }}
                            </time>
                        </p>
                    </div>
                </div>
            </address>
        </article>
    </div>
</main>

</x-layout>
