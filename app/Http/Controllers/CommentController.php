<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // return view();

        return response()->json([
            'succes' => true,
            'comments' => Comment::with('user.post')->latest()->get()
        ]);
    }

    public function show()
    {
        return view('components.comments');
    }
}
