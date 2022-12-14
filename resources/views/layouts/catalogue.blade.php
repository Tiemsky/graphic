<!DOCTYPE html>
<html lang="en">
<head>
  <title> Portfolio , Zechamus &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/fonts/icomoon/style.css') }} ">

  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/lightgallery.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/swiper.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/catalogue/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">

</head>

<body>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0">
              <a href="{{route('home')}}" 
                class="text-white h2 mb-0">
                    zechamus
              </a>
            </h1>
          </div>
          @livewire('catalogue-menu')

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    @yield('content')

  </div>

  @include('partials.footer')
  <script defer src="{{ asset('assets/catalogue/js/jquery-3.3.1.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery-ui.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/popper.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/bootstrap.min.j') }}s"></script>
  <script defer src="{{ asset('assets/catalogue/js/owl.carousel.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery.stellar.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery.countdown.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery.magnific-popup.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/bootstrap-datepicker.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/swiper.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/aos.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/parallax.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/picturefill.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/lightgallery-all.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/jquery.mousewheel.min.js') }}"></script>
  <script defer src="{{ asset('assets/catalogue/js/main.js') }}"></script>

</body>
</html>
