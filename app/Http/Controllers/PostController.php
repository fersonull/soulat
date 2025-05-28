<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function renderForm()
    {
        return view('create-post');
    }

    public function getPost($postId)
    {
        $post = Post::with('user')->find($postId);

        return view('posts.view', ['post' => $post]);
    }

    public function getAllPost()
    {
        $posts = Post::with('user')->latest()->get();

        return view('home', ['posts' => $posts]);
    }

    public function post(Request $request)
    {
        $form = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'images' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        $post = Post::create([
            'title' => $form['title'],
            'body' => $form['content'],
            'images' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        return response()->json(['post' => $post], 201);

    }
}
