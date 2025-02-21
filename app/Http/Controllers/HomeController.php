<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $featuredPost = Post::where('featured', true)->orderBy('created_at', 'desc')->first();
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('welcome', ['recentPosts' => $recentPosts, 'featuredPost' => $featuredPost]);
    }
}