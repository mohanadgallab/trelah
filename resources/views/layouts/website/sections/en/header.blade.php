<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      {{-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo me-auto me-lg-0"><img src="/logo.png" alt="" class="img-fluid">Trelah</a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/#portfolio">Portofolio</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
          <li class="dropdown"><a href="/#areas"><span>Areas Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              @foreach ($countries as $country)
              <li class="dropdown"><a href="#"><span>{{ $country->name}}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($country->items as $item)
                 @if ($item->lang == 'en')
                 <li><a href="{{ route('areas.item' , [$item])}}">{{$item->name}}</a></li>
                 @endif
                    
                  @endforeach
                  
                </ul>
              </li>
              @endforeach
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('web')}}" class="get-started-btn scrollto">Arabic</a>
      <a href="tel:00971555560168" class="get-started-btn scrollto" style="color: white; background:#edd33d">
        <img width="30" height="20" src="https://img.icons8.com/ios/50/phone--v1.png" alt="phone--v1"/>
      </a>

    </div>
  </header>