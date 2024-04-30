<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      {{-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo me-auto me-lg-0"><img src="/logo.png" alt="" class="img-fluid">تريلا</a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="/#about">من نحن</a></li>
          <li><a class="nav-link scrollto" href="/#services">خدماتنا</a></li>
          <li><a class="nav-link scrollto " href="/#portfolio">معرض الأعمال</a></li>
          <li><a class="nav-link scrollto" href="/#team">فريقنا</a></li>
          <li class="dropdown"><a href="#"><span>مناطق الخدمة</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              @foreach ($countries as $country)
              <li class="dropdown"><a href="#"><span>{{ $country->name}}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($country->items as $item)
                  @if ($item->lang == 'ar')
                  <li><a href="{{ route('areas.item' , [$item])}}">{{$item->name}}</a></li>
                  @endif
                    
                  @endforeach
                  
                </ul>
              </li>
              @endforeach
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">إتصال بنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('web.en')}}" class="get-started-btn scrollto">English</a>
      <a href="tel:00971555560168" class="get-started-btn scrollto" style="color: white; background:#edd33d">
        <img width="50" height="20" src="https://img.icons8.com/ios/50/phone--v1.png" alt="phone--v1"/>
      </a>

    </div>
  </header>