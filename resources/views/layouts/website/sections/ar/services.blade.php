<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا</h2>
          <p>نظرة علي خدماتنا</p>
        </div>

        <div class="row">

          @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch mt-4 mt-md-0 mb-2" data-aos="zoom-in" data-aos-delay="200">
            <a href="{{ route('services.portofolio', $service)}}">
              <div class="icon-box">
                <div class="w-100"><img src="{{ asset('services/'. $service->image_path)}}" alt="" class="img-fluid"></i></div>
                <h4>{{ $service->name}}</h4>
                <p>{{ $service->desc}}</p>
              </div>
            </a>
          </div>
          @endforeach

        </div>

      </div>
    </section>