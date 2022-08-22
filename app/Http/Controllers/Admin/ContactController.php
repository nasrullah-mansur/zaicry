<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create()
    {
        $contact = Contact::first();
        return view('admin.contact.create', compact('contact'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'heading' => 'required',
            'title' => 'required',
            'description' => 'required',
            'contact_form_heading' => 'required',
            'contact_form_description' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'social_media_link1' => 'required',
            'social_media_link2' => 'required',
            'social_media_link3' => 'required',
            'social_media_link4' => 'required',
            'google_map_api' => 'required',
            'google_map_lat' => 'required',
            'google_map_long' => 'required',
            'google_map_location_info' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Contact::create($request->all());
        return redirect()->back();
    }

    // public function edit($id)
    // {
    //     $categories = Category::FindOrFail($id);

    //     return view('admin.category.create', compact('categories'));
    // }


    public function update(Request $request, $id)
    {

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|unique:categories,name',
        // ]);

        // if ($validator->fails()) {
        //     return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        // }

        $contact = Contact::FindOrFail($id);

        $contact->update($request->all());

        return redirect()->back();
    }
}
