<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => "blog",
            'posts' => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'title' => 'single post',
            'post' => Post::find($slug)
        ]);
    }
}
