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

  <!-- ======= Hero Section ======= -->
  @include('layouts.website.sections.ar.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('layouts.website.sections.ar.about')
    
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    @include('layouts.website.sections.ar.clients')
    
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    
    @include('layouts.website.sections.ar.features')

    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    @include('layouts.website.sections.ar.services')
    
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    @include('layouts.website.sections.ar.cta')

    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('layouts.website.sections.ar.portfolio')

    <!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    @include('layouts.website.sections.ar.counts')
    
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.website.sections.ar.testimonials')
    
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    @include('layouts.website.sections.ar.team')
    
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.website.sections.ar.contact')
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.website.sections.ar.footer')

  <!-- End Footer -->

@endsection