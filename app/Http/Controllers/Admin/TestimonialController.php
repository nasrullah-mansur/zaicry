<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{

    public function create()
    {
        $testimonial = Testimonial::first();
        return view('admin.testimonial.create', compact('testimonial'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'testimonial_main_heading' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_description' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/testimonial', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Testimonial::create($input);

        return redirect()->back()->with('success', 'testimonial created successfully');
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'testimonial_main_heading' => 'required',
            'testimonial_heading' => 'required',
            'testimonial_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $testimonial = Testimonial::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/testimonial/' . $testimonial->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/testimonial', $name);

            $photo = $testimonial->photo()->update(['file' => $name]);
        }

        $testimonial->update($input);

        return redirect()->back()->with('success', 'testimonial updated successfully');
    }
}
