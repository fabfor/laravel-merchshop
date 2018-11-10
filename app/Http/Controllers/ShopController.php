<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ShopController extends Controller
{
    public function index(){
      $categorie = Category::all();


      return view('shop.index',['cat'=>$categorie]);
    }
}
