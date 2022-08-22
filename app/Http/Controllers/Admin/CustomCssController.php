<?php

namespace App\Http\Controllers\Admin;

use App\CustomCss;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomCssController extends Controller
{
    public function create()
    {
        $customcss = CustomCss::first();
        return view('admin.customcss.create', compact('customcss'));
    }

    public function store(Request $request)
    {
        CustomCss::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $customcss = CustomCss::FindOrFail($id);

        $customcss->update($request->all());

        return redirect()->back();
    }
}
