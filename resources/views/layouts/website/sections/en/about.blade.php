<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @foreach ($about as $a)
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('about/'.$a->image_path)}}" class="img-fluid" alt="{{$a->title}}">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>{{$a->title}}</h3>
            <p class="">
              {{ $a->subtitle}}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>{{$a->list_1}}</li>
              <li><i class="ri-check-double-line"></i>{{$a->list_2}}</li>
              <li><i class="ri-check-double-line"></i>{{$a->list_3}}</li>
            </ul>
            <p>
             {{$a->end}}
            </p>
          </div>
          @endforeach
        </div>

      </div>
    </section>