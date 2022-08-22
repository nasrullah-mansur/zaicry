<?php

namespace App\Http\Controllers\Front;

use App\CommingSoon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommingSoonController extends Controller
{
    public function index()
    {
        $commingsoon = CommingSoon::first();

        return view('front.coming-soon', compact('commingsoon'));
    }
}
