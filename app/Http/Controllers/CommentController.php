<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('welcome', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil dikirim!');
    }
}
