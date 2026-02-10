<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>@yield('titolo', 'Laravel Comics')</title>


  <style>
    .card-img-top {
      object-fit: cover; 
      object-position: top;
      border-radius: 0;
    }

    .card-title {
      letter-spacing: 0.5px;
    }
  </style>


</head>
<body class="bg-dark">
  <div style="display: flex; flex-direction: column; min-height: 100vh">
    @include('partials.header')

    {{-- Contenuto della pagina --}}
    <div style="flex-grow: 1">
      @yield('contenuto')
    </div>

    @include('partials.footer')
  </div>
</body>
</html>