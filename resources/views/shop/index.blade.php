@extends('layouts.shop')

@section('content')

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      @foreach ($pds as $pd)
      <div class="
      @if ($pd->is_special)
        bg-primary
      @else
        bg-dark
      @endif
       mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">{{$pd->title}}</h2>
          <p class="lead">{{$pd->description}}</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      @endforeach

  </div>

@endsection
