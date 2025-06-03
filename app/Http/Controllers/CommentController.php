<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // return view();

        return view('components.comments', [
            'succes' => true,
            'comments' => Comment::with('user.post')->latest()->get()
        ]);
    }
}
