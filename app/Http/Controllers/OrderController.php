<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|max:255',
            'apartment' => 'nullable|max:255'
        ])->validate();

        $order = Order::query()->create([
            'city' => $request->city,
            'street' => $request->street,
            'house' => $request->house,
            'apartment' => $request->apartment,
            'price' => $request->price,
            'user_id' => Auth::user()->id
        ]);

        $basket = Basket::query()->where('user_id', Auth::user()->id)->get();

        Basket::query()->where('user_id', Auth::user()->id)->delete();

        foreach ($basket as $product) {
            OrderedProduct::query()->create([
                'order_id' => $order->id,
                'product_id' => $product->product_id,
                'count' => $product->count
            ]);
        }

        return redirect()->route('home');
    }

    public function orders()
    {
        return view('admin.order', [
            'orders' => Order::query()->orderByDesc('id')->get()
        ]);
    }

    public function successOrder(Order $order)
    {
        $order->update([
            'status' => 'success',
        ]);

        return redirect(route('admin-orders'));
    }

    public function canceledOrder(Order $order)
    {
        $order->update([
            'status' => 'canceled',
        ]);

        return redirect(route('admin-orders'));
    }

    public function buildOrder(Order $order)
    {
        $order->update([
            'status' => 'build',
        ]);

        return redirect(route('admin-orders'));
    }

    public function deliveredOrder(Order $order)
    {
        $order->update([
            'status' => 'delivered',
        ]);

        return redirect(route('admin-orders'));
    }
}
