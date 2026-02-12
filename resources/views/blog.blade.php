<x-layout :title="$title">
    @foreach ( $posts as $data_artikel )
        {{-- Kirim data artikel ke komponen artikel --}}
        <x-artikel :posts="$data_artikel"/>
    @endforeach

</x-layout>
