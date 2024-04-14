
@extends('layouts.website.ar.master')
@section('meta-tag')
<title>Trelah</title>
<meta content="{{ $item->name .','. $item->desc }}" name="description">
<meta content="{{ $item->name .','. $item->desc }}" name="keywords">
<!-----------Open Graph------------->
<meta property="og:title" content="{{ $item->name .','. $item->desc }}" />
<meta property="og:description" content="{{ $item->name .','. $item->desc }}" />
<meta property="og:image" content="https://trelah.com/logo.png" />
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
        <h2>مناطق الخدمة</h2>
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
                <img src="{{ asset('items/'.$item->image_path)}}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$item->name}}</h3>
            <ul>
              <li><strong>البلد :</strong>{{$item->country->name}}</li>
              <li><strong>نوع الخدمة</strong>:{{ $item->service->name}}</li>
              {{-- <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{ $item->name}}</h2>
            <p>
              {{ $item->desc}}
            </p>
          </div>
        </div>
        <div class="col-md-12">
          @foreach ($item->details as $detail)
            <h1>{{$detail->main_title}}</h1>
            @if ($detail->sub_title)
              <h2>{{$detail->sub_title}}</h2>
            @endif
            @if ($detail->paragraph)
              <p>{{ $detail->paragraph}}</p>
            @endif
            
            @if ($detail->l_1 || $detail->l_2 || $detail->l_3 || $detail->l_4 || $detail->l_5 || $detail->l_6 || $detail->l_7 || $detail->l_8 || $detail->l_8 || $detail->l_10 || $detail->l_11 || $detail->l_12 )
              <ul>
                @if ($detail->l_1)
                <li>{{$detail->l_1}}</li>
                @endif
                  
                @if ($detail->l_2)                  
                <li>{{$detail->l_2}}</li>
                @endif

                @if ($detail->l_3)                  
                <li>{{$detail->l_3}}</li>
                @endif

                @if ($detail->l_4)                  
                <li>{{$detail->l_4}}</li>
                @endif

                @if ($detail->l_5)                  
                <li>{{$detail->l_5}}</li>
                @endif

                @if ($detail->l_6)                  
                <li>{{$detail->l_6}}</li>
                @endif

                @if ($detail->l_7)                  
                <li>{{$detail->l_7}}</li>
                @endif

                @if ($detail->l_8)                  
                <li>{{$detail->l_8}}</li>
                @endif

                @if ($detail->l_9)                  
                <li>{{$detail->l_9}}</li>
                @endif

                @if ($detail->l_10)                  
                <li>{{$detail->l_10}}</li>
                @endif

                @if ($detail->l_11)                  
                <li>{{$detail->l_11}}</li>
                @endif

                @if ($detail->l_12)                  
                <li>{{$detail->l_12}}</li>
                @endif

                @if ($detail->l_13)                  
                <li>{{$detail->l_13}}</li>
                @endif

                @if ($detail->l_14)                  
                <li>{{$detail->l_14}}</li>
                @endif
              </ul>
            @endif
          @endforeach
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

