<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
    {{ $post->slug }}
    <div class="p-6 text-gray-900 prose space-y-6">
        <h1 class="not-prose text-4xl">
            <a href="{{ route('posts.show', $post->slug)}}" class="hover:text-blue-500 transition duration-100">Post Title</a>
        </h1>

        <div>Post Teaser</div>

        <div>
            <div>
                <strong>Mazhar Tuhin</strong> 2024-11-02
                <ul class="not-prose p-0 list-none flex items-center space-x-1">
                    <li>
                        <a href="" class="text-sm text-blue-500">Laravel</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>