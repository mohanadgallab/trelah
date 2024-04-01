
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
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
            <h3>{{$truck->name}}</h3>
            <ul>
              <li><strong>الطول :</strong>cm {{$truck->long}} </li>
              <li><strong> العرض</strong>:cm {{ $truck->width}}  </li>
              <li><strong> الوزن</strong>:kg {{ $truck->weight}}  </li>
              {{-- <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
            </ul>
          </div>
          <div class="portfolio-description">
            <h2 style="color:#fca311">{{ $truck->name}}</h2>
            <p>
              {{ $truck->area_1}}
            </p>
            <p>
                {{ $truck->area_2}}
              </p>
              <p>
                {{ $truck->area_3}}
              </p>
              <p>
                {{ $truck->area_4}}
              </p>
              <p>
                {{ $truck->area_6}}
              </p>
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

