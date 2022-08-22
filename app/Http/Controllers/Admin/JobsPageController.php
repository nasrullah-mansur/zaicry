<?php

namespace App\Http\Controllers\Admin;

use App\JobsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobsPageController extends Controller
{
    public function create()
    {
        $jobspage = JobsPage::first();
        return view('admin.jobspage.create', compact('jobspage'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
            'counter1' => 'required',
            'counter1_text' => 'required',
            'counter2' => 'required',
            'counter2_text' => 'required',
            'counter3' => 'required',
            'counter3_text' => 'required',
            'counter4' => 'required',
            'counter4_text' => 'required',
            'job_opening_heading' => 'required',
            'job_opening_title' => 'required',
            'job_process_heading' => 'required',
            'job_process_title' => 'required',
            'job_process_description' => 'required',
            'job_process_step1' => 'required',
            'job_process_step2' => 'required',
            'job_process_step3' => 'required',
            'job_process_step4' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        JobsPage::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
            'counter1' => 'required',
            'counter1_text' => 'required',
            'counter2' => 'required',
            'counter2_text' => 'required',
            'counter3' => 'required',
            'counter3_text' => 'required',
            'counter4' => 'required',
            'counter4_text' => 'required',
            'job_opening_heading' => 'required',
            'job_opening_title' => 'required',
            'job_process_heading' => 'required',
            'job_process_title' => 'required',
            'job_process_description' => 'required',
            'job_process_step1' => 'required',
            'job_process_step2' => 'required',
            'job_process_step3' => 'required',
            'job_process_step4' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $faq = JobsPage::FindOrFail($id);

        $faq->update($request->all());

        return redirect()->back();
    }
}
