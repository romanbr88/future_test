<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all()->sortByDesc('created_at');
        return view('index', compact('comments'));
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->text = $request->text;

        $comment->save();

        return redirect()->route('index');
    }
}
