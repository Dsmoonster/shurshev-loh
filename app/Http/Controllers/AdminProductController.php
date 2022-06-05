<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
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
            'files' => ['required'],
        ])->validate();

        $product = Product::query()->create($request->all());

        $files = $request->file('files');

        foreach ($files as $file) {

            $path = $file->store('public');

            Image::query()->create([
               'image_path' => $path,
               'product_id' => $product->id
            ]);
        }

        return redirect(route('home'));
    }

    public function edit(Product $product)
    {
        return view('admin/product/update',[
            'product' => $product,
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());
        return redirect(route('home'));
    }

}
