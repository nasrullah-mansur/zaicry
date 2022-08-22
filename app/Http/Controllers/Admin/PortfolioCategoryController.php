<?php

namespace App\Http\Controllers\Admin;

use App\PortfolioCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::all();

        return view('admin.portfolio_category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.portfolio_category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:portfolio_categories,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        PortfolioCategory::create($request->all());

        return redirect(route('portfoliocategories.index'))->with('success', 'Portfolio Category created successfully');
    }

    public function edit($id)
    {
        $categories = PortfolioCategory::FindOrFail($id);

        return view('admin.portfolio_category.create', compact('categories'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:portfolio_categories,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $categories = PortfolioCategory::FindOrFail($id);

        $categories->update($request->all());

        return redirect(route('portfoliocategories.index'))->with('success', 'Portfolio Category updated successfully');
    }


    public function destroy($id)
    {
        $service = PortfolioCategory::FindOrFail($id);
        $service->delete();


        return redirect(route('portfoliocategories.index'))->with('toast_warning', 'Portfolio Category deleted successfully ');
    }
}
