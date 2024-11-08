<?php

return [
    'default_collection' => null,

    'collections' => [
        'posts' => [
            'disk' => 'posts',
            'sheet_class' => App\Models\Post::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            'content_parser' => App\ContentParsers\MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];
