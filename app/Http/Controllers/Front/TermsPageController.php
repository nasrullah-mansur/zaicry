<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\TermsPage;
use Illuminate\Http\Request;

class TermsPageController extends Controller
{
    public function index()
    {
        $termspage = TermsPage::first();

        return view('front.terms', compact('termspage'));
    }
}
