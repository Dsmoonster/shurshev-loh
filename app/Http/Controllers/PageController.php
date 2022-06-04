<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()->where('price', '>', 0);

        if ($request->has('category') && !empty($request->get('category')))
            $query->where('category_id', $request->get('category'));

        if ($request->has('by') && !empty($request->get('by'))){
            $sort = $request->get('order');

            if ($sort === 'asc')
                $query->orderBy($request->get('by'));
            else if ($sort === 'desc')
                $query->orderByDesc($request->get('by'));
        }else{
            $query->orderByDesc('created_at');
        }


        return view('index',[
            'products' => $query->get(),
            'categories' => Categories::all(),
        ]);

//        return view('index',[
//            'categories' => Categories::all(),
//            'products' => Product::all()
//        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
