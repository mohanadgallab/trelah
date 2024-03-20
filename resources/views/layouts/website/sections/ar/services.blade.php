<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا</h2>
          <p>نظرة علي خدماتنا</p>
        </div>

        <div class="row">

          @foreach ($services as $country)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-2" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="w-100"><img src="{{ asset('services/'. $country->image_path)}}" alt="" class="img-fluid"></i></div>
              <h4><a href="">{{ $country->name}}</a></h4>
              <p>{{ $country->desc}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>