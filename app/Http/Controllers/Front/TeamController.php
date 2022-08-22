<?php

namespace App\Http\Controllers\Front;

use App\Team;
use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::first();
        $teammember = TeamMember::all();

        return view('front.team', compact('team', 'teammember'));
    }
}
