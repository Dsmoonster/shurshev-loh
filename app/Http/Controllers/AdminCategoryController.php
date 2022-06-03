<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function create()
    {
        return view('admin/category/create');
    }

    public function index()
    {
        return view('admin/category/index',[
           'categories' => Categories::all()
        ]);
    }

    public function destroy(Categories $category)
    {

        $category->delete();

        return redirect(route('admin-category'));
    }

    public function store(Request $request)
    {
        Categories::create($request->all());
        return redirect(route('admin-category'));
    }
}
