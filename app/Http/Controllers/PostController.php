<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {

        // $posts = Post::latest();

        // if(request('search')){
        //     $posts->where('title', 'like', '%'.request('search').'%' )
        //             ->orWhere('body', 'like', '%'.request('search'). '%');
        // }


        return view('posts', [
            'title' => 'All Post',
            'active' => 'blog',
            // 'posts' => Post::all()
            // 'posts' => Post::with(['author', 'category'])->latest()->get()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // 'posts' => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $post
        ]);
    }
}
