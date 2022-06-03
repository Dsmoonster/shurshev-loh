<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index',[
            'categories' => Categories::all(),
            'products' => Product::all()
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
}
