<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\JobsFacility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JobFacilitiesController extends Controller
{
    public function index()
    {
        $jobsfacility = JobsFacility::all();

        return view('admin.jobsfacility.index', compact('jobsfacility'));
    }

    public function create()
    {
        return view('admin.jobsfacility.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/jobsfacility', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        JobsFacility::create($input);

        return redirect(route('jobsfacility.index'))->with('success', 'Job facility created successfully');
    }

    public function edit($id)
    {
        $jobsfacility = JobsFacility::FindOrFail($id);

        return view('admin.jobsfacility.create', compact('jobsfacility'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $jobsfacility = JobsFacility::FindOrFail($id);


        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/jobsfacility/' . $jobsfacility->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/jobsfacility', $name);

            $photo = $jobsfacility->photo()->update(['file' => $name]);
        }

        $jobsfacility->update($input);

        return redirect(route('jobsfacility.index'))->with('success', 'Jobs facility updated successfully');
    }


    public function destroy($id)
    {
        $jobsfacility = JobsFacility::FindOrFail($id);
        $jobsfacility->delete();


        return redirect(route('jobsfacility.index'))->with('toast_warning', 'Jobs facility deleted successfully ');
    }
}
