@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica un prodotto</h1>
            </div>
        </div>
        <div class="row">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="col-12">
                <form class="form-group" method="post" action="{{ route('products.change', ['id'=>$pd->id]) }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" value="{{$pd->title}}" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="number" value="{{$pd->price}}" name="price" placeholder="Inserisci il prezzo" id="price" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Slug</label>
                        <input type="text" value="{{$pd->slug}}" name="slug" placeholder="Cambia lo slug" id="price" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" placeholder="Inserisci una descrizione" rows="8" cols="80" class="form-control">{{$pd->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="description">Attivo</label>
                        <input type="checkbox" name="is_active" value="ok" @if ($pd->is_active == true) checked @endif>
                    </div>

                    <div class="form-group">
                        <label for="description">Speciale</label>
                        <input type="checkbox" name="is_special" value="ok" @if ($pd->is_special == true) checked @endif>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script type="text/javascript">

    $('form').submit(function(e){
      e.preventDefault();
      if ($('textarea[name=description]').text().length > 50){
        alert("la desc deve essere almeno 50 caratteri")
        return false;
      }
      return true;
    })

    </script> --}}

@endsection
