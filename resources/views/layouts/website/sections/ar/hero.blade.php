<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
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