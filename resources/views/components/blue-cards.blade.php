<div class="features-banner py-5 my-4" style="background-color: #0282f9;">
  <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
      
    @php
        $features = [
            ['img' => 'buy-comics-digital-comics.png', 'text' => 'Digital Comics'],
            ['img' => 'buy-comics-merchandise.png', 'text' => 'DC Merchandise'],
            ['img' => 'buy-comics-subscriptions.png', 'text' => 'Subscription'],
            ['img' => 'buy-comics-shop-locator.png', 'text' => 'Comic Shop Locator'],
            ['img' => 'buy-dc-power-visa.svg', 'text' => 'DC Power Visa'],
        ];
    @endphp

    @foreach($features as $feature)
        <div class="feature-item d-flex align-items-center">
            <img src="{{ Vite::asset('resources/img/' . $feature['img']) }}" 
                  alt="{{ $feature['text'] }}" 
                  class="feature-img me-3">
            <span class="text-white text-uppercase fw-bold small">
                {{ $feature['text'] }}
            </span>
        </div>
    @endforeach

  </div>
</div>