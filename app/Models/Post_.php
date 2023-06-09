<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'First Post 1',
            'slug' => 'first-post',
            'author' => 'Intan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, ab enim. Odit labore est quo dolores officia, voluptatum, rem similique temporibus, mollitia eius hic ad facilis corrupti cumque minus vero.'
        ],
        [
            'title' => 'Second Post',
            'slug'  => 'second-post',
            'author' => 'Intans',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, ab enim. Odit labore est quo dolores officia, voluptatum, rem similique temporibus, mollitia eius hic ad facilis corrupti cumque minus vero.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
