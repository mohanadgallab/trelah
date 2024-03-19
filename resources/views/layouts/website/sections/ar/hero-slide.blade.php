<div class="container">
    <div class="heroswiper">
      {{-- {{ dd($trucks)}} --}}
      <div class="swiper-wrapper">
        @foreach ($trucks as $truck)
        <div class="swiper-slide swiper-slide-active">
            <img src="{{ asset('trucks/'.$truck->image_path)}}" alt="">
            <div class="info">
              <h4 class="name">
                {{$truck->name}}
              </h4>
              <span class="type">
                {{ $truck->desc}}
              </span>
            </div>
          </div>
        @endforeach
        {{-- <div class="swiper-slide swiper-slide-active">
          <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/487.svg" alt="">
          <div class="info">
            <h4 class="name">
              Giratina
            </h4>
            <span class="type">
              Ghost, Dragon
            </span>
          </div>
        </div> 
        <div class="swiper-slide swiper-slide-active">
          <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/384.svg" alt="">
          <div class="info">
            <h4 class="name">
              Rayquaza
            </h4>
            <span class="type">
              Dragon, Flying
            </span>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-active">
          <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/646.svg" alt="">
          <div class="info">
            <h4 class="name">
              Kyrum
            </h4>
            <span class="type">
              Dragon, Ice
            </span>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-active">
          <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/249.svg" alt="">
          <div class="info">
            <h4 class="name">
              Lugia
            </h4>
            <span class="type">
              Psychic, Flying
            </span>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-active">
          <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/383.svg" alt="">
          <div class="info">
            <h4 class="name">
              Groudon
            </h4>
            <span class="type">
              Ground
            </span>
          </div>
        </div>--}}
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
  
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>

  <style>
/* $primary: #c31432;
$secondary: #240b36;
$gradient: linear-gradient(to right, #c31432, #240b36); */

  </style>