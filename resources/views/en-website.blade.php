@extends('layouts.website.en.master')
@section('meta-tag')
<title>Trelah</title>
<meta content="" name="description">
<meta content="" name="keywords">
<!-----------Open Graph------------->
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="https://trelah.com/logo.png" />
<!-- Favicons -->
<link href="https://trelah.com/logo.png" rel="icon">
<link href="https://trelah.com/logo.png" rel="apple-touch-icon">
@endsection
@section('body')
<!-- ======= Header ======= -->
  
  @include('layouts.website.sections.en.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('layouts.website.sections.en.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('layouts.website.sections.en.about')
    
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    @include('layouts.website.sections.en.clients')
    
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    
    {{-- @include('layouts.website.sections.en.features') --}}

    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    @include('layouts.website.sections.en.services')
    
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    @include('layouts.website.sections.en.cta')

    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('layouts.website.sections.en.portfolio')

    <!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    @include('layouts.website.sections.en.counts')
    
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.website.sections.en.testimonials')
    
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    @include('layouts.website.sections.en.team')
    
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    @include('layouts.website.sections.en.contact')
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.website.sections.en.footer')

  <!-- End Footer -->

@endsection