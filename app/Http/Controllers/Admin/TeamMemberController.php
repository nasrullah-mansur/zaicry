<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teammember = TeamMember::all();

        return view('admin.teammember.index', compact('teammember'));
    }

    public function create()
    {
        return view('admin.teammember.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'social_media_link1' => 'required',
            'social_media_link2' => 'required',
            'social_media_link3' => 'required',
            'social_media_link4' => 'required',
            'social_media_link5' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/teammember', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }



        TeamMember::create($input);

        return redirect(route('teammember.index'))->with('success', 'Team member created successfully');
    }

    public function edit($id)
    {
        $teammember = TeamMember::FindOrFail($id);

        return view('admin.teammember.create', compact('teammember'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'social_media_link1' => 'required',
            'social_media_link2' => 'required',
            'social_media_link3' => 'required',
            'social_media_link4' => 'required',
            'social_media_link5' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $teammember = TeamMember::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/teammember/' . $teammember->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/teammember', $name);

            $photo = $teammember->photo()->update(['file' => $name]);
        }

        $teammember->update($input);

        return redirect(route('teammember.index'))->with('success', 'Team Member updated successfully');
    }


    public function destroy($id)
    {
        $teammember = TeamMember::FindOrFail($id);

        if (isset($teammember->photo)) {
            Storage::delete('public/teammember/' . $teammember->photo->file);
        }

        $teammember->photo()->delete();
        $teammember->delete();

        return redirect(route('teammember.index'))->with('toast_warning', 'Team Member deleted successfully ');
    }
}
