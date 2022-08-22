<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Workprocess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WorkProcessController extends Controller
{


    public function create()
    {
        $workprocess = Workprocess::first();
        return view('admin.workprocess.create', compact('workprocess'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'workprocess_main_heading' => 'required',
            'workprocess_heading' => 'required',
            'workprocess_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Workprocess::create($request->all());

        return redirect()->back()->with('success', 'Service Box created successfully');
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'workprocess_main_heading' => 'required',
            'workprocess_heading' => 'required',
            'workprocess_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $workprocess = Workprocess::FindOrFail($id);

        $input = $request->all();

        $workprocess->update($input);

        return redirect()->back()->with('success', 'Workprocess updated successfully');
    }
}
