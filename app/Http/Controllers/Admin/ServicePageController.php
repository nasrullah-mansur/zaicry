<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\ServicePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServicePageController extends Controller
{
    public function create()
    {
        $servicepage = ServicePage::first();
        return view('admin.servicepage.create', compact('servicepage'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicepage', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        ServicePage::create($input);

        return redirect()->back()->with('success', 'Servicepage created successfully');
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $Servicepage = ServicePage::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->image) {

            Storage::delete('public/servicepage/' . $Servicepage->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/servicepage', $name);

            $photo = $Servicepage->photo()->update(['file' => $name]);
        }


        $Servicepage->update($input);

        return redirect()->back()->with('success', 'Servicepage updated successfully');
    }
}
