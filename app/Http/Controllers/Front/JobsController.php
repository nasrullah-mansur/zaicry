<?php

namespace App\Http\Controllers\Front;

use App\Jobs;
use App\JobsPage;
use App\JobsFacility;
use App\Mail\JobSubmitMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{
    public function index()
    {
        $jobspage = JobsPage::first();
        $jobsfacility = JobsFacility::all();
        return view('front.career', compact('jobspage', 'jobsfacility'))->withJobs(Jobs::all());
    }

    public function jobsSearch(Request $request)
    {
        if ($request->msg != []) {

            return $job = Jobs::where('title', 'like', "%{$request->msg}%")->get()->toArray();
        } else {
            return Jobs::all();
        }
    }

    public function apply($id)
    {
        $job = Jobs::findOrFail($id);
        return view('front.job-single', compact('job'));
    }

    public function mailForApply(Request $request)
    {
        $data = array(
            'document' => $request->file,
        );

        Mail::to('test@gmail.com')->send(new JobSubmitMail($data));

        Session::flash('job', 'Your cv is sent successfully');
        return redirect()->back();
    }
}
