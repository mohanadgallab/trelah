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
                  <li><a href="{{ route('areas.item' , [$item])}}">{{$item->name}}</a></li>
                    
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

      <a href="#about" class="get-started-btn scrollto">البداية </a>

    </div>
  </header>