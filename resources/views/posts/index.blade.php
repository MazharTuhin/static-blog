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
        <x-side-bar />
    </x-slot>
</x-post-layout>
