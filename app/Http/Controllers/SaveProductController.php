<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveProductController extends Controller
{
  public function save(){
    DB::table('products')
    ->insert([
      'name' => $_POST['name'],
      'description' => $_POST['description'],
      'amount' => $_POST['amount'],
      'price' => $_POST['price']
    ]);
    return view('/products/index');
  }
}
