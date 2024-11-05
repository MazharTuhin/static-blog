<x-post-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
        <div class="p-6 text-gray-900">
            <div class="flex items-center justify-between">
                <h1>Tag: {{ $tag }}</h1>
                <p>{{ $posts->count() }} posts</p>
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
        <x-post-list-item :post="$post" />
    @endforeach

    <x-slot name="sidebar">
        <div class="p-6 text-gray-900">
            <a href="{{ route('home') }}" class='inline-flex w-full items-center px-4 py-2 bg-gray-800 text-white rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 disabled:opacity-25 transition ease-in-out duration-150'>Back</a>
        </div>
    </x-slot>
</x-post-layout>