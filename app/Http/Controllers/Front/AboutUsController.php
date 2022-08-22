<?php

namespace App\Http\Controllers\Front;

use App\Team;
use App\Chooseus;
use App\TeamMember;
use App\AboutUsPage;
use App\ServicePage;
use App\Workprocess;
use App\ChooseusExperience;
use Illuminate\Http\Request;
use App\WorkingProcessProject;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutuspage = AboutUsPage::first();
        $servicepage = ServicePage::first();
        $team = Team::first();
        $teammember = TeamMember::all();

        $workprocess = Workprocess::first();
        $workprocessproject = WorkingProcessProject::all();

        $chooseus = Chooseus::first();
        $ChooseusExperience = ChooseusExperience::all();


        return view('front.about-us', compact('workprocessproject', 'workprocess', 'aboutuspage', 'servicepage', 'team', 'teammember', 'chooseus', 'ChooseusExperience'));
    }
}
