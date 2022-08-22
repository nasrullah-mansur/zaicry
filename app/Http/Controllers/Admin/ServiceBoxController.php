<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\ServiceChild;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServiceBoxController extends Controller
{
    public function index()
    {
        $serviceboxs = ServiceChild::all();

        return view('admin.servicebox.index', compact('serviceboxs'));
    }

    public function create()
    {

        return view('admin.servicebox.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'service_box_heading' => 'required',
            'service_box_description' => 'required',
            'image' => 'required',
            'service_single_heading' => 'required',
            'service_single_title' => 'required',
            'service_single_description' => 'required',
            'image2' => 'required',
            'service_single_detail_heading' => 'required',
            'service_single_detail_description' => 'required',
            'image3' => 'required',
            'service_single_support_1_heading' => 'required',
            'service_single_support_1_description' => 'required',
            'service_single_support_2_heading' => 'required',
            'service_single_support_2_description' => 'required',
            'service_single_support_3_heading' => 'required',
            'service_single_support_3_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image', 'image2', 'image3');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        if ($file = $request->image2) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id2'] = $photo->id;
        }

        if ($file = $request->image3) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id3'] = $photo->id;
        }



        ServiceChild::create($input);

        return redirect(route('admin.servicebox'))->with('success', 'Service Box created successfully');
    }

    public function edit($id)
    {
        $servicebox = ServiceChild::FindOrFail($id);

        return view('admin.servicebox.create', compact('servicebox'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'service_box_heading' => 'required',
            'service_box_description' => 'required',
            'service_single_heading' => 'required',
            'service_single_title' => 'required',
            'service_single_description' => 'required',
            'service_single_detail_heading' => 'required',
            'service_single_detail_description' => 'required',
            'service_single_support_1_heading' => 'required',
            'service_single_support_1_description' => 'required',
            'service_single_support_2_heading' => 'required',
            'service_single_support_2_description' => 'required',
            'service_single_support_3_heading' => 'required',
            'service_single_support_3_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $servicebox = ServiceChild::FindOrFail($id);

        $input = $request->except('image', 'image2', 'image3');

        if ($file = $request->file('image')) {

            Storage::delete('public/servicebox/' . $servicebox->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = $servicebox->photo()->update(['file' => $name]);
        }

        if ($file = $request->file('image2')) {

            Storage::delete('public/servicebox/' . $servicebox->photo_two->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = $servicebox->photo_two()->update(['file' => $name]);
        }

        if ($file = $request->file('image3')) {

            Storage::delete('public/servicebox/' . $servicebox->photo_three->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = $servicebox->photo_three()->update(['file' => $name]);
        }

        $servicebox->update($input);

        return redirect(route('admin.servicebox'))->with('success', 'Service updated successfully');
    }


    public function destroy($id)
    {
        $servicebox = ServiceChild::FindOrFail($id);

        if (isset($servicebox->photo)) {
            Storage::delete('public/servicebox/' . $servicebox->photo->file);
            Storage::delete('public/servicebox/' . $servicebox->photo_two->file);
            Storage::delete('public/servicebox/' . $servicebox->photo_three->file);
        }
        if (isset($servicebox->photo_two)) {
            Storage::delete('public/servicebox/' . $servicebox->photo_two->file);
        }
        if (isset($servicebox->photo_three)) {
            Storage::delete('public/servicebox/' . $servicebox->photo_three->file);
        }


        $servicebox->photo()->delete();
        $servicebox->photo_two()->delete();
        $servicebox->photo_three()->delete();
        $servicebox->delete();

        return redirect(route('admin.servicebox'))->with('toast_warning', 'Service box deleted successfully ');
    }
}
