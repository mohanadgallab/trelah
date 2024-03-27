
@extends('layouts.website.ar.master')
@section('meta-tag')
<title>{{$service->name}}</title>
<meta content="{{$service->name} . ',' . $service->desc}}" name="description">
<meta content="{{$service->name} . ',' . $service->desc}} "name="keywords">
<!-----------Open Graph------------->
<meta property="og:title" content="{{ $service->name}}" />
<meta property="og:description" content="{{$service->name} . ',' . $service->desc}}" />
<meta property="og:image" content="asset('services/'.$service->image_path)" />
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
        <h1> الخدمة</h1>
        <ol>
          <li><a href="/">الرئيسية</a></li>
          <li>الخدمة</li>
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

              <div class="swiper-slide w-90">
                <img src="{{ asset('services/'.$service->image_path)}}" alt="{{$service->name}}" style="display: block;margin-left: auto;margin-right: auto;width: 50%;">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$service->name}}</h3>
            <ul>
              <li><strong>البلد :</strong>{{$service->subtitle}}</li>
              {{-- <li><strong>نوع الخدمة</strong>:{{ $service->service->name}}</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{ $service->name}}</h2>
            <p>
              {{ $service->desc}}
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

