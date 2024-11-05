<div>
    <strong>{{ $post->author }}</strong> | {{ $post->date->diffForHumans() }}
    @if(count($post->tags))
        <ul class="not-prose p-0 list-none flex items-center space-x-1">
            @foreach ($post->tags as $tag)
                <li>
                    <a href="" class="text-sm text-blue-500 border border-blue-500 px-1 rounded">{{ Str::title($tag) }}</a>
                </li>
            @endforeach
        </ul>
    @endif
    
    

</div>