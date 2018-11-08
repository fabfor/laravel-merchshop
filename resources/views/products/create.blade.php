@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea un nuovo prodotto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="{{ route('products.save') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="number" name="price" placeholder="Inserisci il prezzo" id="price" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" placeholder="Inserisci una descrizione" rows="8" cols="80" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
