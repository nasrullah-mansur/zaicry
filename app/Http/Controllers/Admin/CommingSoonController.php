<?php

namespace App\Http\Controllers\Admin;

use App\CommingSoon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CommingSoonController extends Controller
{
    public function create()
    {
        $commingsoon = CommingSoon::first();
        return view('admin.commingsoon.create', compact('commingsoon'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'description' => 'required',
            'social_media_link1' => 'required',
            'social_media_link2' => 'required',
            'social_media_link3' => 'required',
            'social_media_link4' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        CommingSoon::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'description' => 'required',
            'social_media_link1' => 'required',
            'social_media_link2' => 'required',
            'social_media_link3' => 'required',
            'social_media_link4' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $commingsoon = CommingSoon::FindOrFail($id);

        $commingsoon->update($request->all());

        return redirect()->back();
    }
}
