<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(SavePostRequest $request)
    {
        $validated = $request->validated();

        $post = new Post();
        $post->title = $validated['title'];
        $post->introduction = $validated['introduction'];
        $post->content = $validated['content'];
        $post->image = $validated['image'];
        $post->featured = $validated['featured'];
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $validated = $request->validated();

        $post->title = $validated['title'];
        $post->introduction = $validated['introduction'];
        $post->content = $validated['content'];
        $post->image = $validated['image'];
        $post->featured = $validated['featured'];
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function delete(Post $post)
    {
        return view('posts.delete', compact('post'));
    }

    public function destroy(Post $post)
    {
        return redirect()->route('posts.index');
    }

    public function featuredPosts()
    {
        $posts = Post::where('featured', true)->paginate(9);
        return view('posts.featured', compact('posts'));
    }
}