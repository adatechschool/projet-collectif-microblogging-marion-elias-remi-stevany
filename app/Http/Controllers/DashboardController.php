<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $posts = Post::all(); // Fetches all posts
        return view('dashboard', compact('posts')); // Passes posts to the dashboard view
    }
}
