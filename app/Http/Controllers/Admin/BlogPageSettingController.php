<?php

namespace App\Http\Controllers\Admin;

use App\BlogPageSettting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogPageSettingController extends Controller
{
    public function create()
    {
        $blogpagesettings = BlogPageSettting::first();
        return view('admin.blogpagesetting.create', compact('blogpagesettings'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'read_more_text' => 'required',
            'post_item' => 'required',
            'recent_post_widget_item' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        BlogPageSettting::create($request->all());
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'read_more_text' => 'required',
            'post_item' => 'required',
            'recent_post_widget_item' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $blogpagesettings = BlogPageSettting::FindOrFail($id);

        $blogpagesettings->update($request->all());

        return redirect()->back();
    }
}
