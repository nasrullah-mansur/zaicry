<?php

namespace App\Http\Controllers\Admin;

use App\Site;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SiteIdentityController extends Controller
{
    public function index()
    {
        $sites = Site::all();

        return view('admin.site.index', compact('sites'));
    }

    public function create()
    {

        return view('admin.site.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'footer_copyright' => 'required',
            'footer_heading' => 'required',
            'site_address' => 'required',
            'site_support_text' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
            'image2' => 'required',

        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image', 'image2');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/site', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        if ($file = $request->image2) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/site', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id2'] = $photo->id;
        }


        Site::create($input);

        return redirect(route('sites.index'))->with('success', 'Site created successfully');
    }

    public function edit($id)
    {
        $site = Site::FindOrFail($id);

        return view('admin.site.create', compact('site'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'footer_copyright' => 'required',
            'footer_heading' => 'required',
            'site_address' => 'required',
            'site_support_text' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $site = Site::FindOrFail($id);

        $input = $request->except('image', 'image2');

        if ($file = $request->image) {

            Storage::delete('public/site/' . $site->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/site', $name);

            $photo = $site->photo()->update(['file' => $name]);
        }

        if ($file = $request->image) {

            Storage::delete('public/site/' . $site->photo2->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/site', $name);

            $photo = $site->photo2()->update(['file' => $name]);
        }


        $site->update($input);

        return redirect(route('sites.index'))->with('success', 'Site updated successfully');
    }


    public function destroy($id)
    {
        $site = Site::FindOrFail($id);

        if (isset($site->photo)) {
            Storage::delete('public/site/' . $site->photo->file);
        }

        if (isset($site->photo2)) {
            Storage::delete('public/site/' . $site->photo2->file);
        }

        $site->photo()->delete();
        $site->delete();

        return redirect(route('sites.index'))->with('toast_warning', 'Site deleted successfully ');
    }
}
