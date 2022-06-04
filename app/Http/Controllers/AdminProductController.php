<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function single(Product $product)
    {
        return view('single', [
            'product' => $product
        ]);
    }

    public function index()
    {
        return view('admin/product/index', [
            'products' => Product::all()
        ]);
    }

    public function destroy(Product $product)
    {

        $product->delete();

        return redirect(route('admin-product'));
    }

    public function create()
    {
        return view('admin/product/create', [
            'categories' => Categories::all()
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'name' => ['required'],
            'price' => ['required'],
            'content' => ['required'],
        ])->validate();

        Product::create($request->all());
        return redirect(route('admin-product-create'));
    }

}
