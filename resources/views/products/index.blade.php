@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Indice dei prodotti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    Crea nuovo Prodotto
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Titolo Categoria</th>
                            <th>Slug</th>
                            <th>Descrizione</th>
                            <th>Prezzo</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->title }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>
                                    {{ str_limit($product->description, 10, '[...]') }}
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    {{-- <a href="#" class="btn btn-primary">
                                        Edit
                                    </a> --}}
                                    <a href="{{route('products.edit', ['id' => $product->id])}}" class="btn btn-primary">
                                      EDIT
                                    </a>
                                    <a href="{{route('products.delete', ['id' => $product->id])}}" class="btn btn-danger">
                                        DELETE
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
