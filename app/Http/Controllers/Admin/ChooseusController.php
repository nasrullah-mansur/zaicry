<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Chooseus;
use App\ChooseusExperience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ChooseusController extends Controller
{
    public function index()
    {
        $chooseus = Chooseus::all();

        return view('admin.chooseus.index', compact('chooseus'));
    }

    public function create()
    {
        $chooseus = Chooseus::all();

        return view('admin.chooseus.create', compact('chooseus'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'chooseus_heading' => 'required',
            'chooseus_description' => 'required',
            'chooseus_feature' => 'required',
            'chooseus_experience_text' => 'required',
            'chooseus_experience_no' => 'required',
            'chooseus_experience_image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image', 'chooseus_experience_no', 'chooseus_experience_text', 'chooseus_experience_image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/chooseus', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        $chooseus = Chooseus::create($input);

        $chooseInput = $request->only('chooseus_experience_no', 'chooseus_experience_text', 'chooseus_experience_image');
        $condition = $chooseInput['chooseus_experience_text'];

        foreach ($condition as $key => $condition) {
            $chooseExp = new ChooseusExperience();

            $chooseExp->chooseus_id = $chooseus->id;
            $chooseExp->chooseus_experience_no = $chooseInput['chooseus_experience_no'][$key];
            $chooseExp->chooseus_experience_text = $chooseInput['chooseus_experience_text'][$key];

            $chooseusImage = [];

            if ($file = $chooseInput['chooseus_experience_image'][$key]) {

                $name = time() . '_' . $file->getClientOriginalName();

                $file->storeAs('public/chooseusexperience', $name);

                $photo = Photo::create(['file' => $name]);

                $chooseExp->photo_id = $photo->id;
            }

            $chooseExp->save();
        }

        return redirect(route('admin.chooseus'))->with('success', 'Service Box created successfully');
    }

    public function edit($id)
    {
        $chooseus = Chooseus::FindOrFail($id);
        $chooseusexp = ChooseusExperience::where('chooseus_id', $id)->get();
        return view('admin.chooseus.create', compact('chooseus', 'chooseusexp'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'chooseus_heading' => 'required',
            'chooseus_description' => 'required',
            'chooseus_feature' => 'required',
            'chooseus_experience_text' => 'required',
            'chooseus_experience_no' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $chooseus = Chooseus::findOrFail($id);

        $input = $request->except('image', 'chooseus_experience_no', 'chooseus_experience_text', 'chooseus_experience_image');

        if ($file = $request->file('image')) {

            Storage::delete('public/chooseus/' . $chooseus->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/chooseus', $name);

            $photo = $chooseus->photo()->update(['file' => $name]);
        }

        $chooseus->update($input);

        $chooseInput = $request->only('chooseus_experience_no', 'chooseus_experience_text', 'chooseus_experience_image');
        $condition = $chooseInput['chooseus_experience_text'];

        foreach ($condition as $key => $condition) {
            $chooseExp = ChooseusExperience::where('chooseus_id', $id)->get();

            $chooseExp[$key]->chooseus_id = $chooseus->id;
            $chooseExp[$key]->chooseus_experience_no = $chooseInput['chooseus_experience_no'][$key];
            $chooseExp[$key]->chooseus_experience_text = $chooseInput['chooseus_experience_text'][$key];

            if (isset($request->file('chooseus_experience_image')[$key])) {
                if ($file = $chooseInput['chooseus_experience_image'][$key]) {

                    Storage::delete('public/chooseusexperience/' . $chooseExp[0]->photo->file);

                    $name = time() . '_' . $file->getClientOriginalName();

                    $file->storeAs('public/chooseusexperience', $name);

                    $photo = $chooseExp[$key]->photo()->update(['file' => $name]);
                }
            }

            $chooseExp[$key]->save();
        }

        return redirect(route('admin.chooseus'))->with('success', 'Service updated successfully');
    }


    public function destroy($id)
    {
        $chooseus = Chooseus::FindOrFail($id);

        $chooseusExp = ChooseusExperience::where('chooseus_id', $id)->get();

        foreach ($chooseusExp as $exp) {
            $exp->photo->file;
            $exp->photo()->delete();
            Storage::delete('public/chooseusexperience/' . $exp->photo->file);
        }

        if (isset($chooseus->photo)) {
            Storage::delete('public/chooseus/' . $chooseus->photo->file);
        }

        $chooseus->photo()->delete();
        $chooseus->delete();

        return redirect(route('admin.chooseus'))->with('toast_warning', 'Service box deleted successfully ');
    }
}
