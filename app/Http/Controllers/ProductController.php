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
