<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'name' => 'Udin',
        'email' => 'zahrul@gmail.com',
        "image" => "1.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('blog', [
        'title' => "blog",
        'posts' => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        'title' => 'single post',
        'post' => $new_post
    ]);
});