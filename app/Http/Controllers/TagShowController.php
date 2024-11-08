<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class TagShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $tag)
    {
        $posts = Sheets::collection('posts')
            ->all()
            ->filter(function (Post $post) use ($tag) {
                return in_array($tag, $post->tags);
            })
            ->paginate(2);
        abort_if($posts->isEmpty(), 404);

        return view('tags.show', compact('posts', 'tag'));
    }
}
