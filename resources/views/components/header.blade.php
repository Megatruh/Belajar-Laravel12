<header class="relative bg-white shadow-sm max-w-4xl mx-auto">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
            <a href="/blog" class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">
                <svg class="w-6 h-6 text-gray-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M12.1429 11v9m0-9c-2.50543-.7107-3.19099-1.39543-6.13657-1.34968-.48057.00746-.86348.38718-.86348.84968v7.2884c0 .4824.41455.8682.91584.8617 2.77491-.0362 3.45995.6561 6.08421 1.3499m0-9c2.5053-.7107 3.1067-1.39542 6.0523-1.34968.4806.00746.9477.38718.9477.84968v7.2884c0 .4824-.4988.8682-1 .8617-2.775-.0362-3.3758.6561-6 1.3499m2-14c0 1.10457-.8955 2-2 2-1.1046 0-2-.89543-2-2s.8954-2 2-2c1.1045 0 2 .89543 2 2Z"/>
                </svg>
                Blog
            </a>
            </li>
            
            @isset($post)
            <li>
            <div class="flex items-center space-x-1.5">
                <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                <a href="/category/{{ $post->category->slug }}" class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">{{ $post->category->name }}</a>
            </div>
            </li>
            @endisset
            
            <li aria-current="page">
            <div class="flex items-center space-x-1.5">
                <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                <span class="inline-flex items-center text-sm font-medium text-body-subtle">{{ $title }}</span>
            </div>
            </li>
        </ol>
        </nav>
    </div>
</header>
