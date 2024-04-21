<div class="container">
    <div class="heroswiper">
      {{-- {{ dd($trucks->count())}} --}}
      <div class="swiper-wrapper">
        @foreach ($trucks as $truck)
        <a href="{{ route('trucks.portofolio', $truck)}}" class="swiper-slide swiper-slide-active">
            <img src="{{ asset('trucks/'.$truck->image_path)}}" alt="">
            <div class="info">
              <h4 class="name">
                {{$truck->name}}
              </h4>
              <span class="type">
                {{ $truck->desc}}
              </span>
            </div>
          </a>
        @endforeach
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
        
      </div>
  
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
