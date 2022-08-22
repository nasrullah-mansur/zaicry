<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        Category::create($request->all());

        return redirect(route('categories.index'))->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $categories = Category::FindOrFail($id);

        return view('admin.category.create', compact('categories'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $categories = Category::FindOrFail($id);

        $categories->update($request->all());

        return redirect(route('categories.index'))->with('success', 'Category updated successfully');
    }


    public function destroy($id)
    {
        $service = Category::FindOrFail($id);
        $service->delete();


        return redirect(route('categories.index'))->with('toast_warning', 'Category deleted successfully ');
    }
}
