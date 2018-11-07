<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    //ritornerà una view con l'indice dei prodotti
    public function index()
    {
        $products = Product::all();

        $data = [
            'title' => 'Indice Prodotti',
            'products' => $products
        ];

        return view('products.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Crea nuovo prodotto'
        ];

        return view('products.create', $data);
    }

    public function delete(Product $product){

      // $pd = Product::find($product);

      $product->delete();

      return redirect()->route('products.index');

    }

    public function edit($product){

      $pd = Product::find($product);

      return view('products.edit', ['pd' => $pd]);

    }

    public function change(Product $product, Request $request){

      $data = $request->all();

      // $pd = Product::find($product);
      //prendi l'oggetto dal database da cambiare, con id
      $product->fill($data);

      if ($request->input('is_active') == null){
        $product->is_active = false;
      }
      else{
        $product->is_active = true;
      }

      if ($request->input('is_special') == null){
        $product->is_special = false;
      }
      else{
        $product->is_special = true;
      }

      $product->save();

      return redirect()->route('products.index');

    }

    public function save(Request $request)
    {
        $data = $request->all();

        if (empty($data['title']) || empty($data['price'])) {
            return 'error';
        }

        $data['slug'] = str_slug($data['title']);

        $product = new Product();
        $product->fill($data);
        $product->save();

        return redirect()->route('products.index');
    }

}
