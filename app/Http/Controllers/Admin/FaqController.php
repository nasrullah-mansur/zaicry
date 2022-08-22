<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function create()
    {
        $faq = Faq::first();
        return view('admin.faq.create', compact('faq'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Faq::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $faq = Faq::FindOrFail($id);

        $faq->update($request->all());

        return redirect()->back();
    }
}
