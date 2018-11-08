@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Indice delle categorie</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    Crea nuova Categoria
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
                            <th>Slug</th>
                            <th>Edit</th>
                            <th>Prodotti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->category_slug }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">
                                      EDIT
                                    </a>
                                    <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger">
                                        DELETE
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('categories.products', $category )}}">Prodotti associati</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
