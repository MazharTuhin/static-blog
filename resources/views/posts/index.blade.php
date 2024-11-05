<x-post-layout>
    @if (count($posts))
        @foreach ($posts as $post)
            <x-post-list-item :post="$post" />
        @endforeach
    @else
        <div class="p-6 text-gray-900">
            {{ __('No posts found') }}
        </div>
    @endif

    {{ $posts->links() }}



    <x-slot name="sidebar">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __('Sidebar') }}
            </div>
        </div>
    </x-slot>
</x-post-layout>
