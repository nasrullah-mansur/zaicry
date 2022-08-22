<?php

namespace App\Http\Controllers\Admin;

use App\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SeoController extends Controller
{
    public function create()
    {
        $seo = Seo::first();
        return view('admin.seo.create', compact('seo'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'site_meta_tags' => 'required',
            'site_meta_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Seo::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'site_meta_tags' => 'required',
            'site_meta_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $seo = seo::FindOrFail($id);

        $seo->update($request->all());

        return redirect()->back();
    }
}
