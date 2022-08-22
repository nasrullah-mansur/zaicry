<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\BasicSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BasicSettingController extends Controller
{
    public function create()
    {
        $basicsetting = BasicSetting::first();
        return view('admin.basicsetting.create', compact('basicsetting'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'site_title' => 'required',
            'site_tagline' => 'required',
            'footer_copyright' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/basicsetting', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        BasicSetting::create($input);

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'site_title' => 'required',
            'site_tagline' => 'required',
            'footer_copyright' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        $blogpagesettings = BasicSetting::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/basicsetting/' . $blogpagesettings->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/basicsetting', $name);

            $photo = $blogpagesettings->photo()->update(['file' => $name]);
        }

        $blogpagesettings->update($input);

        return redirect()->back();
    }
}
