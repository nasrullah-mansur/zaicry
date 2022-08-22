<?php

namespace App\Http\Controllers\Front;

use App\BlogSingleSetting;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class ShowallPostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(6);
        $blogsinglesetting = BlogSingleSetting::first();

        return view('front.blog-all', compact('posts', 'blogsinglesetting'));
    }
}
