<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $portfolio_categories = PortfolioCategory::all();
        return view('admin.portfolio.create', compact('portfolio_categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'portfolio_category_id' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $input = $request->except('image');

        if ($file = $request->image) {

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/portfolio', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        Portfolio::create($input);

        return redirect(route('portfolio.index'))->with('success', 'Portfolio created successfully');
    }

    public function edit($id)
    {
        $portfolios = Portfolio::FindOrFail($id);
        $portfolio_categories = PortfolioCategory::all();
        return view('admin.portfolio.create', compact('portfolios', 'portfolio_categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'portfolio_category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $portfolio = Portfolio::FindOrFail($id);

        $input = $request->except('image');

        if ($file = $request->image) {

            Storage::delete('public/portfolio/' . $portfolio->photo->file);

            $name = time() . '_' . $file->getClientOriginalName();

            $file->storeAs('public/portfolio', $name);

            $portfolio->photo()->update(['file' => $name]);
        }

        $portfolio->update($input);

        return redirect(route('portfolio.index'))->with('success', 'Portfolio updated successfully');
    }

    public function destroy($id)
    {
        $portfolios = Portfolio::FindOrFail($id);
        $portfolios->delete();

        return redirect(route('portfolio.index'))->with('toast_warning', 'Portfolio deleted successfully ');
    }
}
