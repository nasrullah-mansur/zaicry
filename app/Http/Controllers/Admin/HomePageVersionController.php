<?php

namespace App\Http\Controllers\Admin;

use App\HomePageVersion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageVersionController extends Controller
{
    public function index(Request $request)
    {
        $homepageversion = HomePageVersion::first();

        $homepageversion->update([
            'version' => $request->homepage
        ]);

        return redirect()->back();
    }
}
