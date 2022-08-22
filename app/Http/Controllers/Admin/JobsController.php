<?php

namespace App\Http\Controllers\Admin;

use App\Jobs;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();

        return view('admin.job.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.job.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'company_name' => 'required',
            'company_about' => 'required',
            'company_vision' => 'required',
            'looking_for' => 'required',
            'requirement_skill' => 'required',
            'educational_qualification' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/jobs', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Jobs::create($input);

        return redirect(route('jobs.index'))->with('success', 'Jobs created successfully');
    }

    public function edit($id)
    {
        $jobs = Jobs::FindOrFail($id);

        return view('admin.job.create', compact('jobs'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'company_name' => 'required',
            'company_about' => 'required',
            'company_vision' => 'required',
            'looking_for' => 'required',
            'requirement_skill' => 'required',
            'educational_qualification' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $jobs = Jobs::findOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {
            if (isset($jobs->photo)) {
                Storage::delete('public/jobs/' . $jobs->photo->file);
            }
            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/jobs', $name);

            $photo = $jobs->photo()->update(['file' => $name]);
        }

        $jobs->update($input);

        return redirect(route('jobs.index'))->with('success', 'Jobs updated successfully');
    }


    public function destroy($id)
    {
        $job = Jobs::FindOrFail($id);
        if (isset($job->photo)) {
            Storage::delete('public/jobs/' . $job->photo->file);
        }

        $job->photo()->delete();
        $job->delete();


        return redirect(route('jobs.index'))->with('toast_warning', 'Jobs deleted successfully ');
    }
}
