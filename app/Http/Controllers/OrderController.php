<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\ValueObjects\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("orders.index", [
            'orders' => Order::where('user_id', Auth::id())->paginate(10)
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     *
     * @return RedirectResponse
     */
    public function store()
    {
        $cart = Session::get('cart', new Cart());
        if($cart->hasItems()){
            $order = new Order();
            $order->quantity = $cart->getQuantity();
            $order->price = $cart->getSum();
            $order->user_id = Auth::id();
            $order->save();
            $productIds = $cart->getItems()->map(function($item){
                return ['product_id' => $item->getProductId()];
            });
            $order->products()->attach($productIds);
            Session::put('cart', new Cart());
            return redirect(route('orders.index'))->with('status', 'Zamówienie zrealizowano!');
        }
        return back();
    }
}
