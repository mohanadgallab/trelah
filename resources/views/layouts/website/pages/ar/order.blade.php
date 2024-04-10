
@extends('layouts.website.ar.master')
@section('meta-tag')
<title>{{$truck->name}}</title>
<meta content="{{$truck->name}} .',' {{$truck->area_1}} .' ,'. {{$truck->area_2}} .' ,'. {{$truck->area_3}} .' ,'. {{$truck->area_4 }}.' ,'. {{$truck->area_5}}.' ,'. {{$truck->area_6}}" name="description">
<meta content="{{ $truck->name}}" name="keywords">
<!-----------Open Graph------------->
<meta property="og:title" content="{{ $truck->name}}" />
<meta property="og:description" content="{{$truck->name}} .',' {{$truck->area_1}} .' ,'. {{$truck->area_2}} .' ,'. {{$truck->area_3}} .' ,'. {{$truck->area_4 }}.' ,'. {{$truck->area_5}}.' ,'. {{$truck->area_6}}" />
<meta property="og:image" content="asset('trucks/'.$truck->image_path)" />
<!-- Favicons -->
<link href="https://trelah.com/logo.png" rel="icon">
<link href="https://trelah.com/logo.png" rel="apple-touch-icon">
@endsection
@section('body')
<!-- ======= Header ======= -->
  
  @include('layouts.website.sections.ar.header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1>مناطق الخدمة</h1>
        <ol>
          <li><a href="/">الرئيسية</a></li>
          <li>المنطقة</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('trucks/'.$truck->image_path)}}" alt="{{$truck->name}}" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <form action="{{ route('trucks.order.save', $truck)}}" method="post" role="form" class="php-email-formm">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="الإسم" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0 float-start">
                    <input type="phone" class="form-control" name="mobile" id="mobile" placeholder="رقم الجوال" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group mt-3">
                        <input type="number" class="form-control" name="qty" id="subject" placeholder="عدد" required>
                        
                      </div>
                    <div class="col-md-6 mt-3">
                        <h6>{{$truck->name}}</h6> 
                    </div> 
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="from_to" class="form-control" placeholder="من" />
                </div>
                <div class="form-group mt-3">
                    <input type="text" name="to_to" class="form-control" placeholder="الوجهة" />
                  </div>
                <div class="my-3">
                  {{-- <div class="loading">Loading</div> --}}
                  <div class="error-message"></div>
                  @if(Session::has('order'))
                  <div class="sent-message" style="color: #fac311">Your message has been sent. Thank you!</div>
                  @endif
                </div>
                <input type="hidden" class="form-control" name="truck_id" id="subject" placeholder="عدد" value="{{$truck->id}}">
                <div class="text-center"><button type="submit" class="btn btn-warning">إرسال الرسالة</button></div>
              </form>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Portfolio Details Section -->
    
    
   

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.website.sections.ar.footer')

  <!-- End Footer -->

@endsection



