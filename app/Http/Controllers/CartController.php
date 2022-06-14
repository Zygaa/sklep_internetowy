<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\ValueObjects\Cart;
use App\ValueObjects\CartItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Exception;


class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cart.index',[
            'cart' => Session::get('cart', new Cart())
        ]);
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return JsonResponse
     */
    public function destroy(Product $product)
    {
        try {
            $cart = Session::get('cart', new Cart());
            Session::put('cart', $cart->removeItem($product));
            return  response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'=>'error',
                'message'=>'Wystąpił błąd'
            ])->setStatusCode(500);
        }
    }
}
