<header class="bg-white sticky-top shadow-sm">
  <nav class="navbar navbar-expand-lg navbar-light py-0">
    <div class="container d-flex justify-content-between align-items-center">
      
      <a class="navbar-brand py-2" href="/">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" style="width: 80px;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-lg-3"> @php
            $links = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];
          @endphp

          @foreach ($links as $link)
            <li class="nav-item">
              <a href="#" class="nav-link px-0 {{ $link === 'Comics' ? 'active' : '' }}">
                {{ strtoupper($link) }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>

    </div>
  </nav>
</header>