<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use Illuminate\Http\Request;
use App\WorkingProcessProject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WorkprocessprojectController extends Controller
{
    public function index()
    {
        $workprocessprojects = WorkingProcessProject::all();

        return view('admin.workprocessproject.index', compact('workprocessprojects'));
    }

    public function create()
    {
        return view('admin.workprocessproject.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_heading' => 'required',
            'project_description' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/workprocessproject', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        WorkingProcessProject::create($input);

        return redirect(route('admin.workprocessproject'))->with('success', 'Service Box created successfully');
    }

    public function edit($id)
    {
        $workprocessproject = WorkingProcessProject::FindOrFail($id);

        return view('admin.workprocessproject.create', compact('workprocessproject'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'project_heading' => 'required',
            'project_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $workprocessproject = WorkingProcessProject::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/workprocessproject/' . $workprocessproject->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/workprocessproject', $name);

            $photo = $workprocessproject->photo()->update(['file' => $name]);
        }

        $workprocessproject->update($input);

        return redirect(route('admin.workprocessproject'))->with('success', 'Service updated successfully');
    }


    public function destroy($id)
    {
        $workprocessproject = WorkingProcessProject::FindOrFail($id);

        if (isset($workprocessproject->photo)) {
            Storage::delete('public/workprocessproject/' . $workprocessproject->photo->file);
        }

        $workprocessproject->photo()->delete();
        $workprocessproject->delete();

        return redirect(route('admin.workprocessproject'))->with('toast_warning', 'Service box deleted successfully ');
    }
}
