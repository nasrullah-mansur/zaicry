<?php

namespace App\Http\Controllers\Front;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($id)
    {
        $page = Page::findOrFail($id);
        return view('front.pages', compact('page'));
    }
}
