<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('admin/product/index',[
            'products' => Product::all()
        ]);
    }

    public function destroy(Product $product)
    {

        $product->delete();

        return redirect(route('admin-product'));
    }
}
