@extends('layouts.main')
  
@php
  $comics = config("comics");
  # dd($comics);
@endphp


@section('contenuto')
  <h1>Laravel Comics</h1>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4"> 

      @foreach ($comics as $comic)
      <div class="col">
        <x-comics-cards>
          <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
          <x-slot:title>{{$comic['title']}}</x-slot:title>
        </x-comics-cards>
      </div>          
      @endforeach

    </div>
@endsection