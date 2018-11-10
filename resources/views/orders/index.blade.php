@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Indice degli ordini</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Consegnato</th>
                            <th>N. prodotti</th>
                            <th>Creato Il</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $o)
                        <tr>
                          <td>{{$o->id}}</td>
                          <td>{{$o->user->name}} {{$o->user->lastname}}</td>
                          <td>{{$o->shipped}}</td>
                          <td>{{count($o->products)}}</td>
                          <td>{{$o->created_at}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
