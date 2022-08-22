<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:tags,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Tag::create($request->all());

        return redirect(route('tags.index'))->with('success', 'Tag created successfully');
    }

    public function edit($id)
    {
        $tags = Tag::FindOrFail($id);

        return view('admin.tag.create', compact('tags'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:tags,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $tags = Tag::FindOrFail($id);

        $tags->update($request->all());

        return redirect(route('tags.index'))->with('success', 'Tag updated successfully');
    }


    public function destroy($id)
    {
        $tag = Tag::FindOrFail($id);
        $tag->delete();


        return redirect(route('tags.index'))->with('toast_warning', 'Tag deleted successfully ');
    }
}
