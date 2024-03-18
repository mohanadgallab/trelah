<div class="container">
    <div class="heroswiper">
      <div class="swiper-wrapper">
        @foreach ($trucks as $truck)
        <div class="swiper-slide swiper-slide-active">
            <img src="{{ Storage::url($truck->image_path)}}" alt="">
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
.heroswiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
  .swiper-slide {
    position: relative;
    width: 300px;
    height: 400px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
    filter: grayscale(80%);
    transition: all 0.8s cubic-bezier(0.25, 0.4, 0.45, 1.4);
    border-radius: 15px;
    background: $gradient;
    overflow: hidden;
    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .info {
      width: 100%;
      position: absolute;
      bottom: 0;
      z-index: 10;
      padding: 15px;
      box-shadow: inset 0 -120px 120px -120px black,
        inset 0 -120px 120px -120px black;
      h4 {
        margin: 0;
        padding-bottom: 10px;
        color: #ffffff
      }
      p{
        color: #ffffff
      }
    }
  }
  .swiper-slide-active {
    filter: none;
  }

  //custom navigation

  .swiper-pagination-bullet-active {
    background-color: $primary !important;
  }

  .swiper-pagination-bullet {
    background-color: grey;
  }

  .swiper-button-prev,
  .swiper-button-next {
    top: 50%;
    width: 40px;
    height: 40px;
    background: rgb(255, 255, 38);
    border: 3px solid $secondary;
    border-radius: 50%;
    color: $primary;
    font-weight: 700;
    outline: 0;
    transition: background-color 0.2s ease, color 0.2s ease;

    &::after {
      font-size: 18px;
    }
  }

  .swiper-button-prev {
    &:after {
      position: relative;
      left: -1px;
    }
  }

  .swiper-button-next {
    &:after {
      position: relative;
      left: 1px;
    }
  }

  .swiper-button-prev,
  .swiper-container-rtl .swiper-button-next {
    left: 10px;
    right: auto;
  }

  .swiper-button-next,
  .swiper-container-rtl .swiper-button-prev {
    right: 10px;
    left: auto;
  }

  .swiper-button-prev.swiper-button-disabled,
  .swiper-button-next.swiper-button-disabled {
    opacity: 0;
    cursor: auto;
    pointer-events: none;
  }
}
  </style>