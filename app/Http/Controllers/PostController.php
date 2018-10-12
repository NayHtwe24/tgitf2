<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function withoutEagerload()
    {
        $posts = Post::paginate(30);

        return view('post.index', compact('posts'));
    }

    public function withEagerload()
    {
        $posts = Post::with('user')->paginate(30);

        return view('post.index', compact('posts'));
    }

    public function withoutCaching()
    {
        $posts = Post::with('user')->paginate(30);

        return view('post.index', compact('posts'));
    }

    public function withCaching()
    {
        $minutes = 120;
        $page = request('page', 1);

        $posts = Cache::remember('post' . $page, $minutes, function() {
            return Post::with('user')->paginate(30);
        });

        return view('post.index', compact('posts'));
    }
}
