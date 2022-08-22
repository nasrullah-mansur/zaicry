<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\AboutUsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutUsPageController extends Controller
{
    public function create()
    {
        $aboutuspage = AboutUsPage::first();
        return view('admin.aboutuspage.create', compact('aboutuspage'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'choose_us_title' => 'required',
            'choose_us_heading' => 'required',
            'choose_us_description' => 'required',
            'choose_us_button_text' => 'required',
            'choose_us_icon1' => 'required',
            'choose_us_text1' => 'required',
            'choose_us_icon2' => 'required',
            'choose_us_text2' => 'required',
            'choose_us_icon3' => 'required',
            'choose_us_text3' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('choose_us_icon1', 'choose_us_icon2', 'choose_us_icon3');

        if ($file = $request->choose_us_icon1) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = Photo::create(['file' => $name]);

            $input['choose_us_icon1'] = $photo->id;
        }

        if ($file = $request->choose_us_icon2) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = Photo::create(['file' => $name]);

            $input['choose_us_icon2'] = $photo->id;
        }

        if ($file = $request->choose_us_icon3) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = Photo::create(['file' => $name]);

            $input['choose_us_icon3'] = $photo->id;
        }

        AboutUsPage::create($input);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'main_heading' => 'required',
            'choose_us_title' => 'required',
            'choose_us_heading' => 'required',
            'choose_us_description' => 'required',
            'choose_us_button_text' => 'required',
            'choose_us_text1' => 'required',
            'choose_us_text2' => 'required',
            'choose_us_text3' => 'required',
        ]);


        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        $aboutuspage = AboutUsPage::FindOrFail($id);

        $input = $request->except('image', 'choose_us_icon1', 'choose_us_icon2', 'choose_us_icon3');

        if ($file = $request->file('choose_us_icon1')) {

            Storage::delete('public/aboutuspage/' . $aboutuspage->icon1->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = $aboutuspage->icon1()->update(['file' => $name]);
        }

        if ($file = $request->file('choose_us_icon2')) {

            Storage::delete('public/aboutuspage/' . $aboutuspage->icon2->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = $aboutuspage->icon2()->update(['file' => $name]);
        }

        if ($file = $request->file('choose_us_icon3')) {

            Storage::delete('public/aboutuspage/' . $aboutuspage->icon3->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/aboutuspage', $name);

            $photo = $aboutuspage->icon3()->update(['file' => $name]);
        }

        $aboutuspage->update($input);

        return redirect()->back();
    }
}
