<?php

namespace App\Http\Controllers\Front;

use App\Faq;
use App\FaqTab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::first();
        $faqtab = FaqTab::all();
        return view('front.faq', compact('faq', 'faqtab'));
    }
}
