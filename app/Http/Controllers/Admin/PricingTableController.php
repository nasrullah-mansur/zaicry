<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Pricing;
use App\PricingButton;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PricingTableController extends Controller
{
    public function index()
    {
        $pricings = Pricing::with('pricingButton')->get();

        return view('admin.pricing.index', compact('pricings'));
    }

    public function create()
    {
        return view('admin.pricing.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pricing_package' => 'required',
            'pricing_heading' => 'required',
            'pricing_amount' => 'required',
            'pricing_list' => 'required',
            'pricing_button_text' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image', 'button_text', 'pricing_id');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/pricing', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }


        $pricing = Pricing::create($input);

        return redirect(route('admin.pricingtable'))->with('success', 'Pricing Box created successfully');
    }

    public function edit($id)
    {
        $pricingtable = Pricing::FindOrFail($id);

        return view('admin.pricing.create', compact('pricingtable'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pricing_package' => 'required',
            'pricing_heading' => 'required',
            'pricing_amount' => 'required',
            'pricing_list' => 'required',
            'pricing_button_text' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $pricing = Pricing::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->file('image')) {

            Storage::delete('public/pricing/' . $pricing->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/pricing', $name);

            $photo = $pricing->photo()->update(['file' => $name]);
        }

        $pricing->update($input);

        return redirect(route('admin.pricingtable'))->with('success', 'Pricing updated successfully');
    }


    public function destroy($id)
    {
        $pricing = Pricing::FindOrFail($id);

        if (isset($pricing->photo)) {
            Storage::delete('public/pricing/' . $pricing->photo->file);
        }

        $pricing->photo()->delete();
        $pricing->delete();

        return redirect(route('admin.pricingtable'))->with('toast_warning', 'Pricing box deleted successfully ');
    }
}
