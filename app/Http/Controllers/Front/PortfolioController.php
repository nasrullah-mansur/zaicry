<?php

namespace App\Http\Controllers\Front;

use App\Post;
use App\Portfolio;
use App\BlogPageSettting;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        $portfolio_categories = PortfolioCategory::all();

        $blogpagesettting = BlogPageSettting::first();
        $post = Post::oldest()->limit($blogpagesettting->post_item)->get();

        return view('front.portfolio', compact('portfolios', 'portfolio_categories', 'post', 'blogpagesettting'));
    }
}
