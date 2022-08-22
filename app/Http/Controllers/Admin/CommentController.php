<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        if ($request->comment_id) {
            $comment = Comment::findOrFail($request->comment_id)->reply()->create([
                'reply' => $request->comment,
                'comment_id' => $request->comment_id,
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            Comment::create([
                'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment,
                'post_id' => $request->post_id
            ]);
        }

        return redirect()->back();
    }
}
