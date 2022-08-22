<?php

namespace App\Http\Controllers\Admin;

use App\Latestproject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LatestprojectController extends Controller
{
    public function create()
    {
        $latestproject = Latestproject::first();

        return view('admin.latestproject.create', compact('latestproject'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'latestproject_main_heading' => 'required',
            'latestproject_heading' => 'required',
            'latestproject_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Latestproject::create($request->all());

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'latestproject_main_heading' => 'required',
            'latestproject_heading' => 'required',
            'latestproject_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $latestproject = Latestproject::FindOrFail($id);

        $input = $request->all();

        $latestproject->update($input);

        return redirect()->back();
    }
}
