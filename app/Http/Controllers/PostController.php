<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // public function index()
    // {
    //     $post = Post::all();
    //     return view('posts.index', compact('post'));
    // }
}
