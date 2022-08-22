<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function create()
    {
        $team = Team::first();
        return view('admin.team.create', compact('team'));
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

        Team::create($request->all());
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

        $team = Team::FindOrFail($id);

        $team->update($request->all());

        return redirect()->back();
    }
}
