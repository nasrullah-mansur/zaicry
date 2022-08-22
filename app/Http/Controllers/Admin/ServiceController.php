<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function create()
    {
        $service = Service::first();
        return view('admin.service.create', compact('service'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'service_heading' => 'required',
            'service_description' => 'required'
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicebox', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Service::create($request->all());

        return redirect()->back()->with('success', 'Service created successfully');
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'service_heading' => 'required',
            'service_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $service = Service::FindOrFail($id);

        $service->update($request->all());

        return redirect()->back()->with('success', 'Service updated successfully');
    }
}
