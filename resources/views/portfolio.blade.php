
@extends('layouts.website.ar.master')
@section('meta-tag')
<title>Trelah</title>
<meta content="تريلا هي شركة من ضمن شركات الشحن البري في الامارات والى كافة دول الخليج تجدنا بخبراتنا الكافية لشحن انواع عديدة في المجال التجاري والشخصي" name="description">
<meta content="خدمات شحن بري شحن جوي شحن بحري من الامارات الى كافة انحاء الممكلة العربية السعودية و دولة الكويت و مملكة البحرين و سلطنة عمان و دولة قطر" name="keywords">
<!-----------Open Graph------------->
<meta property="og:title" content="تريلا هي شركة من ضمن شركات الشحن البري في الامارات والى كافة دول الخليج تجدنا بخبراتنا الكافية لشحن انواع عديدة في المجال التجاري والشخصي تريلا شركة شحن بري من الامارات الى السعودية" />
<meta property="og:description" content="خدمات شحن بري شحن جوي شحن بحري من الامارات الى كافة انحاء الممكلة العربية السعودية و دولة الكويت و مملكة البحرين و سلطنة عمان و دولة قطر" />
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








{{-- <main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
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
                <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>This is an example of portfolio detail</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Portfolio Details Section -->

</main> --}}