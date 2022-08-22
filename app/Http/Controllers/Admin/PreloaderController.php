<?php

namespace App\Http\Controllers\Admin;

use App\Preloader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PreloaderController extends Controller
{
    public function create()
    {

        $preloaders = Preloader::first();
        return view('admin.preloader.create', compact('preloaders'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }


        Preloader::create($request->except('on_off'));
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'text' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $preloader = Preloader::first();

        $preloader->update($request->all());

        return redirect()->back();
    }

    public function preloaderSetup()
    {

        $preloader = Preloader::first();

        if ($preloader->on_off == 0) {
            $preloader->update([
                'on_off' => 1
            ]);
        } else {
            $preloader->update([
                'on_off' => 0
            ]);
        }

        return redirect()->back();
    }

    public function preloaderEdit()
    {
        $preloader = Preloader::first();
        if ($preloader->on_off == 0) {
            $preloader->update([
                'on_off' => 1
            ]);
        } else {
            $preloader->update([
                'on_off' => 0
            ]);
        }

        return redirect()->back();
    }
}
