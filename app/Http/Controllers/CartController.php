<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\ValueObjects\Cart;
use App\ValueObjects\CartItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd(Session::get('cart', new Cart()));
        return view('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Product  $product
     * @return JsonResponse
     */
    public function store(Product $product)
    {
      $cart = Session::get('cart', new Cart());
      Session::put('cart', $cart->addItem($product));
        return response()->json([
          'status' => 'success'
        ]);
    }
}
