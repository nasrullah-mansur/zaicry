<?php

namespace App\Http\Controllers\Admin;

use App\FaqTab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FaqTabsController extends Controller
{
    public function index()
    {
        $faqtab = FaqTab::all();

        return view('admin.faqtab.index', compact('faqtab'));
    }

    public function create()
    {
        return view('admin.faqtab.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        FaqTab::create($request->all());

        return redirect(route('faqtab.index'))->with('success', 'Faq tab created successfully');
    }

    public function edit($id)
    {
        $faqtab = FaqTab::FindOrFail($id);

        return view('admin.faqtab.create', compact('faqtab'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $faqtab = FaqTab::FindOrFail($id);

        $faqtab->update($request->all());

        return redirect(route('faqtab.index'))->with('success', 'Faqtab updated successfully');
    }


    public function destroy($id)
    {
        $faqtab = FaqTab::FindOrFail($id);
        $faqtab->delete();

        return redirect(route('faqtab.index'))->with('toast_warning', 'Faq Tab deleted successfully ');
    }
}
