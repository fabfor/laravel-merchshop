<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index(){
      $products = Product::where('is_active',true)->get();

      return view('shop.index',['pds'=>$products]);
    }
}
