<?php

namespace App\Http\Controllers\Admin;

use App\BlogSingleSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SinglePageSettingController extends Controller
{
    public function create()
    {
        $blogsinglesettings = BlogSingleSetting::first();
        return view('admin.blogsinglepage.create', compact('blogsinglesettings'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_title' => 'required',
            'recent_blog_title' => 'required',
            'recent_blog_description' => 'required',
            'categories_title' => 'required',
            'recent_blogs_title' => 'required',
            'recent_post_item' => 'required',
            'popular_tags_title' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        BlogSingleSetting::create($request->all());
        return redirect()->back();
    }



    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'blog_title' => 'required',
            'recent_blog_title' => 'required',
            'recent_blog_description' => 'required',
            'categories_title' => 'required',
            'recent_blogs_title' => 'required',
            'recent_post_item' => 'required',
            'popular_tags_title' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $blogsinglesettings = BlogSingleSetting::FindOrFail($id);

        $blogsinglesettings->update($request->all());

        return redirect()->back();
    }
}
