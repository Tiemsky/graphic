<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nifty Theme | Osama Bakri">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="keywords" content="Portfey, Portfolio, graphique designe , graphisme , digital marketing , freelance , seo , editing , entrepreneur , logo , conception de logo ,conception de carte de visite, carte de visite , flyers , affiches publicitaire , zechamus">
    <meta name="theme-color" content="#050505">
    <meta name="description" content="zechamus , entreprise qui vous propose des services de graphique designe , digital marketing , devellopement web et application" >
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendors/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendors/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">

    <!-- title -->
    <title> Zechamus </title>
  </head>
  <body data-spy="scroll" data-target="#scrollspy_bar" data-offset="0">
    <!-- LODAER -->
    <div class="loader_screen" id="loader_screen">
      <div class="loader">
          <svg viewBox="0 0 80 80">
              <rect x="8" y="8" width="64" height="64"></rect>
          </svg>
      </div>
    </div>
    <!-- HOME SECTION -->
    <div class="home_se theme_section position-relative text-md-left text-center"
        id="home"
        data-parallax="scroll"
        data-image-src="{{ asset('assets/frontend/images/bg/bg.jpg') }} ">
      <div class="container">
        <!-- text -->
        <div class="text">
            <h1 class="mb-2 zechamus"> <i>ZECHAMUS</i> <br>
                <h5 class="zechamus" style="color: white"> <i>when the charm becomes a behavior</i> </h5>
                <br>
            </h1>
          <!-- space -->
          <div class="py-md-3 py-2"></div>
          <div>
            <a href="{{ route('contact-us') }} " class="theme_btn_sh3 text-capitalize">
                {{__('Contact-us')}}
                <img src="{{ asset('assets/frontend/images/icons/right.svg') }}"
                class="icon img-fluid ml-1" alt="icon">
            </a>
          </div>
        </div>
      </div>
    </div>
    @yield('content')
    <!-- NAVBAR -->
    <!-- overlay-navigation -->
    <div class='nav_layer w-100 h-100' id="navigation">
      <nav class="w-100 h-100">
        <ul class="list-unstyled w-100 h-100 mb-0 d-flex flex-lg-row flex-column">
          <li class="justify-content-center align-items-center" id='item_1'>
              <a href='{{ route('home') }} ' class="d-block position-relative text-uppercase text-center"
              data-content='Discover'>
              {{__('About-us')}}
              </a>
          </li>

          <li class="justify-content-center align-items-center" id='item_2'>
              <a href='{{ route('services') }} ' class="d-block position-relative text-uppercase text-center"
              data-content='Discover'>
              {{__('Our Services')}}
              </a>
          </li>

          <li class="justify-content-center align-items-center" id='item_3'>
              <a href='{{ route('catalogue.index') }} ' class="d-block position-relative text-uppercase text-center"
              data-content='Discover'>
              {{__('Portfolio')}}
            </a>
          </li>

          <li class="justify-content-center align-items-center" id='item_4'>
              <a href='{{ route('contact-us') }} ' class="d-block position-relative text-uppercase text-center"
              data-content='Discover'>
              {{__('Contact-us')}} 
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- navbar humburger -->
    <div id='humburger' class="d-block">
      <div id='bar_1' class="d-block"></div>
      <div id='bar_2' class="d-block"></div>
      <div id='bar_3' class="d-block"></div>
    </div>
    <!-- GALLERY MODAL -->
    <div class="gallery_modal text-center" id="gallery_modal">
      <div class="container">
        <!-- box -->
        <div class="box mx-auto">
        >

          <!-- image -->' '
          <img src="{{ asset('assets/frontend/images/media/06.png') }}"
              class="img-fluid" alt="gallery Image">
        </div>
        <!-- dismiss button -->
        <button type="button"
                  class="dismiss_btn d-inline-flex align-items-center justify-content-center mt-4" id="dismiss_btn">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </div>
    <!-- COLOR BOX -->
    <div class="color_box" id="color_box">
        <div class="gear d-flex align-items-center justify-content-center">
        <i class="fa fa-gear"></i>
        </div>
        <!-- switch -->
        <div class="switch d-flex justify-content-between flex-wrap">
        <!-- item -->
        <div class="item d-inline-flex align-items-center justify-content-center mr-1" data-color="blue">
            <i class="fa fa-tint"></i>
        </div>
        <!-- item -->
        <div class="item d-inline-flex align-items-center justify-content-center mr-1" data-color="yellow">
            <i class="fa fa-tint"></i>
        </div>
        <!-- item -->
        <div class="item d-inline-flex align-items-center justify-content-center" data-color="green">
            <i class="fa fa-tint"></i>


        </div>
        </div>
    </div>
    @include('partials.contact-us')
    @include('partials.footer')
    <!-- SCROLLSPY -->
    <!-- Whatssap GetButton.io widget !-->
    <script defer type="text/javascript">
      (function () {
          var options = {
              whatsapp: "+919052921159", // WhatsApp number
              instagram: "zechamus", // Instagram username
              call_to_action: "Hello comment puis je vous aider ?", // Call to action
              button_color: "#129BF4", // Color of button
              position: "right", // Position may be 'right' or 'left'
              order: "whatsapp,instagram", // Order of buttons
          };
          var proto = 'https:', host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
    </script>
    <!-- /GetButton.io widget -->
      <!-- Scripts -->
    <script defer src="{{ asset('assets/frontend/js/vendors/popper.js') }}"></script>
    <script defer src="{{ asset('assets/frontend/js/vendors/jquery-3.3.1.min.js') }}"></script>
    <script defer src="{{ asset('assets/frontend/js/vendors/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('assets/frontend/js/vendors/parallax.min.js') }}"></script>
    <script defer src="{{ asset('assets/frontend/js/vendors/slick.min.js') }}"></script>
    <script defer src="{{ asset('assets/frontend/js/theme/script.js') }}"></script>
  </body>
</html>
