<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        @foreach ($hero as $h)
        <div class="col-xl-6 col-lg-8">
          <h1> 
            <span>{{ $h->spanh1 }}</span> 
             {{ $h->h1}}</h1>
          <h2>{{ $h->h2 }}<span>{{ $h->spanh2 }}</span></h2>
        </div>
        @endforeach
      </div>

      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        @include('layouts.website.sections.ar.hero-slide')
      </div>

    </div>
  </section>



  {{-- @foreach ($trucks as $truck)
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <img src="{{ Storage::url($truck->image_path)}}" class="img-fluid" alt="{{ $truck->area_1}}">
            <h3><a href="">{{ $truck->name}}</a></h3>
          </div>
        </div>
        @endforeach --}}