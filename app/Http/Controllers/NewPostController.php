<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewPostController extends Controller
{

    public function create ()
{
    return view('posts.create');
}
public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Create a new post record
    $post = new Post;
    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];
    $post->user_id = auth()->id();
    $post->save();

    // Redirect the user
    return redirect()->route('dashboard')->with('success', 'Post created successfully!');
}

}
