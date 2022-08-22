<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Pricingarea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PricingAreaController extends Controller
{
    public function index()
    {
        $pricingareas = Pricingarea::all();

        return view('admin.pricingarea.index', compact('pricingareas'));
    }

    public function create()
    {
        return view('admin.pricingarea.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pricing_area_main_heading' => 'required',
            'pricing_area_heading' => 'required',
            'pricing_area_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/pricingarea', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Pricingarea::create($request->all());

        return redirect(route('admin.pricingarea'))->with('success', 'Pricingarea created successfully');
    }

    public function edit($id)
    {
        $pricingarea = Pricingarea::FindOrFail($id);

        return view('admin.pricingarea.create', compact('pricingarea'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'pricing_area_main_heading' => 'required',
            'pricing_area_heading' => 'required',
            'pricing_area_description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $pricingarea = Pricingarea::FindOrFail($id);

        $pricingarea->update($request->all());

        return redirect(route('admin.pricingarea'))->with('success', 'Pricingarea updated successfully');
    }


    public function destroy($id)
    {
        $pricingarea = Pricingarea::FindOrFail($id);
        $pricingarea->delete();


        return redirect(route('admin.pricingarea'))->with('toast_warning', 'Pricingarea deleted successfully ');
    }
}
