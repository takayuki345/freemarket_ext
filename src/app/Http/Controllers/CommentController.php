<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $userId = Auth::id();

        $comment = new Comment();
        $comment->comment_user_id = $userId;
        $comment->item_id = $request->item_id;
        $comment->content = $request->content;
        $comment->save();

        return redirect('/item/' . $request->item_id);
    }
}
