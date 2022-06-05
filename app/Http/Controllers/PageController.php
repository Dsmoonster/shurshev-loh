<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()->where('price', '>', 0);

        if ($request->has('category') && !empty($request->get('category')))
            $query->where('category_id', $request->get('category'));

        if ($request->has('by') && !empty($request->get('by'))) {
            $sort = $request->get('order');

            if ($sort === 'asc')
                $query->orderBy($request->get('by'));
            else if ($sort === 'desc')
                $query->orderByDesc($request->get('by'));
        } else {
            $query->orderByDesc('created_at');
        }


        return view('index', [
            'products' => $query->paginate(5),
            'categories' => Categories::all(),
        ]);

    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function basket()
    {
        return view('basket');
    }

    public function oplata()
    {
        return view('oplata');
    }

    public function adress()
    {
        $orders = Order::query()->where('user_id', Auth::user()->id)->get();
        return view('adress', [
            'orders' => $orders
        ]);
    }

    public function dostavka()
    {
        return view('dostavka');
    }

    public function garant()
    {
        return view('garant');
    }

    public function lkb()
    {
        return view('lkb');
    }
}
