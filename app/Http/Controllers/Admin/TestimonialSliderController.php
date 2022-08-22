<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\TestimonialSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialSliderController extends Controller
{
    public function index()
    {
        $testimonialsliders = TestimonialSlider::all();

        return view('admin.testimonialslider.index', compact('testimonialsliders'));
    }

    public function create()
    {
        return view('admin.testimonialslider.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'testimonial_name' => 'required',
            'testimonial_title' => 'required',
            'testimonial_description' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/testimonialslider', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        TestimonialSlider::create($input);

        return redirect(route('admin.testimonialslider'))->with('success', 'testimonialslider created successfully');
    }

    public function edit($id)
    {
        $testimonialslider = TestimonialSlider::FindOrFail($id);

        return view('admin.testimonialslider.create', compact('testimonialslider'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'testimonial_name' => 'required',
            'testimonial_title' => 'required',
            'testimonial_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $testimonialslider = TestimonialSlider::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/testimonialslider/' . $testimonialslider->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/testimonialslider', $name);

            $photo = $testimonialslider->photo()->update(['file' => $name]);
        }

        $testimonialslider->update($input);

        return redirect(route('admin.testimonialslider'))->with('success', 'testimonialslider updated successfully');
    }


    public function destroy($id)
    {
        $testimonialslider = TestimonialSlider::FindOrFail($id);

        if (isset($testimonialslider->photo)) {
            Storage::delete('public/testimonialslider/' . $testimonialslider->photo->file);
        }

        $testimonialslider->photo()->delete();
        $testimonialslider->delete();

        return redirect(route('admin.testimonialslider'))->with('toast_warning', 'testimonialslider deleted successfully ');
    }
}
