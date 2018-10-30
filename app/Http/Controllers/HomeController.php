<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Homepage - Mio Ecommerce'
        ];

        return view('home', $data);
    }

}
