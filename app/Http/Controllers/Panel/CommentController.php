<?php

namespace App\Http\Controllers\Panel;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['user', 'post'])->withCount('replies')->paginate();
        
        return view('panel.comments.index', compact('comments'));
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
