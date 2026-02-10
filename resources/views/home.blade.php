@extends('layouts.main')
  
@php
  $comics = config("comics");
  # dd($comics);
@endphp


@section('contenuto')
  <div class="container">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4">
      @foreach ($comics as $comic)
        <div class="col">
          <x-comics-cards>
            <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
            <x-slot:title>{{$comic['title']}}</x-slot:title>
          </x-comics-cards>
        </div>
      @endforeach
    </div>
  </div>
@endsection