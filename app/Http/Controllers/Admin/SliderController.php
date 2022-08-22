<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Video;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function create()
    {
        $slider = Slider::first();
        return view('admin.slider.create', compact('slider'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slider_heading' => 'required',
            'slider_description' => 'required',
            'image' => 'required',
            'video' => 'required'
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image', 'video');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/slider', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }


        if ($file = $request->video) {

            $video = Video::create(['file' => $name]);

            $input['video_id'] = $video->id;
        }


        Slider::create($input);

        return redirect()->back()->with('success', 'Slider created successfully');
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'slider_heading' => 'required',
            'slider_description' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $slider = Slider::FindOrFail($id);

        $input = $request->except('image', 'video');

        if ($file = $request->image) {

            Storage::delete('public/slider/' . $slider->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/slider', $name);

            $photo = $slider->photo()->update(['file' => $name]);
        }


        if ($file = $request->video) {

            $video = $slider->video()->update(['file' => $file]);
        }

        $slider->update($input);

        return redirect()->back()->with('success', 'Slider updated successfully');
    }
}
