<?php

namespace App\Http\Controllers;

use App\Dtos\Cart\CartDto;
use App\Dtos\Cart\CartItemDto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\View\Factory;
use Exception;
use App\Http\Requests\StoreProductRequest;
use App\Models\ProductCategory;



class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd(Session::get('cart', new CartDto()));
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
      $cart = Session::get('cart', new CartDto());
      $items = $cart->getItems();
      if(Arr::exists($items, $product->id)){
        $items[$product->id]->incrementQuantity();
      }else{
        $cartItemDto = new CartItemDto();
        $cartItemDto->setProductId($product->id);
        $cartItemDto->setName($product->name);
        $cartItemDto->setPrice($product->price);
        $cartItemDto->setQuantity(1);
        $cartItemDto->setImagePath($product->image_path);
        $items[$product->id] = $cartItemDto;
      }
      $cart->setItems($items);
      $cart->incrementTotalQuantity();
      $cart->incrementTotalSum($product->price);

      Session::put('cart', $cart);
        return response()->json([
          'status' => 'success'
        ]);
    }
}
