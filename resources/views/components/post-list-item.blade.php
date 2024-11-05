<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
    <div class="p-6 text-gray-900 prose space-y-6">
        <h1 class="not-prose text-3xl">
            <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-500 transition duration-100">
                {{ $post->title }}
            </a>
        </h1>

        <div>{{ $post->teaser }}</div>

        <x-post-meta :post="$post" />
    </div>
</div>
