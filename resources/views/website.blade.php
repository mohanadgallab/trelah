@extends('layouts.website.ar.master')

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