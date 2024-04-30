<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>Services</p>
        </div>

        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch mt-4 mt-md-0 mb-2" data-aos="zoom-in"
                    data-aos-delay="200">
                    <a href="{{ route('services.profile', $service)}}">
                        <div class="icon-box">
                            <div class=""><img src="{{ asset('services/'. $service->image_path) }}" alt="{{$service->name}}"
                                    class="img-fluid w-90 h-50"></i></div>
                            <h4>{{ $service->name}}</h4>
                            <p style="color: #fff">

                            </p>
                        </div>
                    </a>
                </div>
            @endforeach






        </div>

    </div>
</section>
