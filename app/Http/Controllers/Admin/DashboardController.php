<?php

namespace App\Http\Controllers\Admin;

use App\Jobs;
use App\Post;
use App\Site;
use App\User;
use App\HomePageVersion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $adminUsers = User::where('role', 'admin')->get();
        $jobs = Jobs::all();

        $showhomepage = HomePageVersion::first();
        $site =  Site::first();
        return view('admin.dashboard', compact('posts', 'adminUsers', 'jobs', 'showhomepage', 'site'));
    }
}
