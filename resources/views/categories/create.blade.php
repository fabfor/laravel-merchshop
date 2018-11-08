@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea una nuova categoria</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="{{ route('categories.save') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="is_active">Attivo</label>
                        <input type="checkbox" name="is_active" value="ok">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
