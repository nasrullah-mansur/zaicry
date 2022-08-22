<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\LatestprojectSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LatestprojectsliderController extends Controller
{
    public function index()
    {
        $latestprojectsliders = LatestprojectSlider::all();

        return view('admin.latestprojectslider.index', compact('latestprojectsliders'));
    }

    public function create()
    {
        return view('admin.latestprojectslider.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'latestproject_heading' => 'required',
            'latestproject_description' => 'required',
            'latestproject_button' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/latestprojectslider', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        LatestprojectSlider::create($input);

        return redirect(route('admin.latestprojectslider'))->with('success', 'Service Box created successfully');
    }

    public function edit($id)
    {
        $latestprojectslider = LatestprojectSlider::FindOrFail($id);

        return view('admin.latestprojectslider.create', compact('latestprojectslider'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'latestproject_heading' => 'required',
            'latestproject_description' => 'required',
            'latestproject_button' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $latestprojectslider = LatestprojectSlider::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/latestprojectslider/' . $latestprojectslider->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/latestprojectslider', $name);

            $photo = $latestprojectslider->photo()->update(['file' => $name]);
        }

        $latestprojectslider->update($input);

        return redirect(route('admin.latestprojectslider'))->with('success', 'Service updated successfully');
    }


    public function destroy($id)
    {
        $latestprojectslider = LatestprojectSlider::FindOrFail($id);

        if (isset($latestprojectslider->photo)) {
            Storage::delete('public/latestprojectslider/' . $latestprojectslider->photo->file);
        }

        $latestprojectslider->photo()->delete();
        $latestprojectslider->delete();

        return redirect(route('admin.latestprojectslider'))->with('toast_warning', 'Service box deleted successfully ');
    }
}
