<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post pertama",
            'slug' => 'judul-post-pertama',
            "author" => "udin",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum modi nulla facere iure quos facilis saepe iste impedit animi cumque deserunt, soluta ab similique, earum praesentium qui rerum aliquam ut cupiditate. Perspiciatis, ipsum delectus nisi beatae dolore ducimus earum, nam excepturi quae repudiandae itaque officiis mollitia explicabo ratione voluptates laborum totam laudantium id. Corporis autem earum, ipsa nobis nemo quae aspernatur minus illo minima, nostrum placeat eius neque natus ad debitis. Sapiente, laboriosam aperiam? Rerum aspernatur perspiciatis eius pariatur placeat!"
        ],
        [
            "title" => "Judul Post kedua",
            'slug' => 'judul-post-kedua',
            "author" => "udin",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum modi nulla facere iure quos facilis saepe iste impedit animi cumque deserunt, soluta ab similique, earum praesentium qui rerum aliquam ut cupiditate. Perspiciatis, ipsum delectus nisi beatae dolore ducimus earum, nam excepturi quae repudiandae itaque officiis mollitia explicabo ratione voluptates laborum totam laudantium id. Corporis autem earum, ipsa nobis nemo quae aspernatur minus illo minima, nostrum placeat eius neque natus ad debitis. Sapiente, laboriosam aperiam? Rerum aspernatur perspiciatis eius pariatur placeat!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
