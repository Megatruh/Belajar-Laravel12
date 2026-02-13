<x-layout :title="$title">
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            @foreach ( $posts as $data_artikel )
                {{-- Kirim data artikel ke komponen artikel --}}
                <x-artikel :posts="$data_artikel"/>
            @endforeach
        </div>
    </div>
</x-layout>
