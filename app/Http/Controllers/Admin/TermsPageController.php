<?php

namespace App\Http\Controllers\Admin;

use App\TermsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TermsPageController extends Controller
{
    public function create()
    {
        $termspage = TermsPage::first();
        return view('admin.termspage.create', compact('termspage'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'terms_page_main_heading' => 'required',
            'terms_page_title' => 'required',
            'terms_page_heading_description' => 'required',
            'terms_page_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        TermsPage::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'terms_page_main_heading' => 'required',
            'terms_page_title' => 'required',
            'terms_page_heading_description' => 'required',
            'terms_page_description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $termspage = TermsPage::FindOrFail($id);

        $termspage->update($request->all());

        return redirect()->back();
    }
}
