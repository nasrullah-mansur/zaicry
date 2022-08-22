<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.page.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        Page::create($request->all());

        return redirect(route('pages.index'))->with('success', 'Jobs created successfully');
    }

    public function edit($id)
    {
        $page = Page::FindOrFail($id);

        return view('admin.page.create', compact('page'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $page = Page::findOrFail($id);

        $page->update($request->all());

        return redirect(route('pages.index'))->with('success', 'Page updated successfully');
    }


    public function destroy($id)
    {
        $page = Page::FindOrFail($id);

        $page->delete();

        return redirect(route('pages.index'))->with('toast_warning', 'Page deleted successfully ');
    }
}
