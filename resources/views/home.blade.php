@extends('layouts.main')
  
@php
  $comics = config("comics");
  # dd($comics);
@endphp


@section('contenuto')
<x-jumbotron></x-jumbotron>

<div class="container mt-5 position-relative">
  <h2>
    <span class="badge text-bg-primary rounded-0 py-2 px-4 position-absolute current-series">CURRENT SERIES</span>
  </h2>
</div>

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

  <div class="text-center mt-3">
    <h5>
      <span class="badge text-bg-primary rounded-0 py-2 px-5">
        LOAD MORE
      </span>
    </h5>
  </div>

</div>

<x-blue-cards></x-blue-cards>
@endsection