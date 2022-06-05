<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index()
    {
        return view('basket',[
            'products' => Auth::user()->baskets
        ]);
    }

    public function store(Product $product, Request $request)
    {
        $basket = Basket::query()
            ->where('user_id', Auth::user()->id)
            ->where('product_id', $product->id)
            ->first();
        if ($basket){
            $basket->count++;
            $basket->save();
        }else{
            Basket::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'count' => 1
            ]);
        }
        return redirect()->back();
    }

    public function destroy(Basket $product)
    {

        $product->delete();

        return redirect(route('basket'));
    }
}
