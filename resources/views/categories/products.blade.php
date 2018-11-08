@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Indice di tutti i prodotti associati alla categoria: {{ $category->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach ($category->products as $product)
                        <li>{{ $product->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
