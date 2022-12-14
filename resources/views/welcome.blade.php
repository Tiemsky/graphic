@extends('layouts.master')
@section('content')
  <!-- MAIN -->
  <main class="ml-auto">
    <!-- SECTION II -->
    <div class="se_ii theme_section text-md-left text-center"
        id="about_me"
        data-parallax="scroll"
        data-image-src="{{ asset('assets/frontend/images/bg/03.png') }}"
        data-speed=".4">

        <div class="container">
        <!-- row -->
          <!-- col -->
            <div class=" ml-auto">
            <!-- text -->
                <div class="text">
              <!-- title -->
                <div class="se_title" >
                    <!-- tiemsky div class="home_se theme_section position-relative text-md-left text-center" id="home" data-parallax="scroll" data-image-src="assets/images/bg/bg.jpg"-->
                    <h3 class="text-uppercase mb-1">{{__('Who are we?')}}</h3>
                    <h3 class=""><i>{{__('Digital Creators')}}</i> </h3>
                </div>
                <p class="text-justify">
                    {{__(' Welcome to zechamus, your digital design agency, Zechamus is a graphic design and digital content creation agency.')}}
                    <a id="show_more_btn" type="button" class="text-info">
                      <i>{{__('More...')}}</i>
                    </a>
                </p>
               
                <div id="show_more" class="d-none">
                  <p class="textt-justify">
                    {{__(' composed of a professional team. We are the ideal partner to boost your digital presence through several services. Our digital design agency aims to help you and your business to develop and take advantage of the benefits of the digital world. First we ensure your presentation through the design of all types of graphic content such as logos, posters, advertising videos etc ...')}} 
                  </p>
                  <p class="textt-justify">
                    {{__('Then we ensure your online presence with our digital marketing services (community management, SEO ...)')}}
                  </p>
                  <p class="textt-justify">
                    {{__('Finally we offer the design of your websites and your applications Android and IOS')}}
                  </p>
                  <a id="show_less_btn" type="button" class="text-info">
                    <i>{{__('Show less...')}}</i>
                  </a>
                </div>
               
              <!-- links container -->
              <div class="links_cont position-relative d-md-flex align-items-center justify-content-start pt-1">
                <a href="{{ route('catalogue.index') }} " class="theme_btn_sh3 mr-md-2 mb-md-0 mb-2"> {{__('Visit our portfolio')}}
                    <img src="{{ asset('assets/frontend/images/icons/download.svg') }} " class="icon img-fluid ml-1" alt="icon"></a>
                <!-- bar -->
                <span class="bar d-md-block d-none"></span>
                <!-- social links -->
                <ul class="social_links list-unstyled mb-0 ml-md-2 d-flex align-items-center justify-content-md-start justify-content-center">
                  <li class="mr-1"><a href="https://www.instagram.com/zechamus.pro/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  <!--li class="mr-1"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a> </li-->
                  <li class="mr-1"><a href="https://www.linkedin.com/company/71397170/admin/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <!--li class="mr-1"><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li-->
                  <!--li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li-->
                </ul>
              </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION III & IV & V -->
    <div data-parallax="scroll"
        data-image-src="{{ asset('assets/frontend/images/bg/03.png') }} ">
      <!-- SECTION III - SERVICES SECTION -->
      <div class="se_iii py_xl" id="se_iii" >
        <div class="container">
          <!-- title -->
          <div class="se_title">
            <h4 class="mb-3 text-uppercase" id="services">
                Our Services
            </h4>
          </div>
          <!-- space -->
          <div class="space_sm"></div>
          <!-- row -->
          <div class="row text-md-left text-center">
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="{{ route('graphic-design') }} ">
                  <img src="{{ asset('assets/frontend/images/icons/3d.svg') }}"
                      class="icon img-fluid mb-3" alt="icon" >
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Graphic Design')}}
                  </h5>
                </a>
                <p class="mb-0 text-justify">
                  {{__('Graphic design is the art of creating images through the composition of colors, lines, textures and shapes')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="{{ route('digital-marketing') }} ">
                  <img src="{{ asset('assets/frontend/images/icons/popular.svg')}}" class="icon img-fluid mb-3" alt="icon">
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Digital Marketing')}}
                  </h5>
                </a>
                <p class="mb-0 text-justify">
                {{__('Our job is to take your message and deliver it visually to a story that engages your audience, grabs attention and moves your viewers to action.')}}  
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="{{ route('web-mobile-dev') }} ">
                  <img src="{{ asset('assets/frontend/images/icons/slow-motion.svg')}}" class="icon img-fluid mb-3" alt="icon">
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Web Site and Mobile Applications')}}
                  </h5>
                </a>
                <p class="mb-0 text-justify ">
                  {{__('We design for you all types of professional websites and applications respecting the international norms and standards.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="">
                  <img src="{{ asset('assets/frontend/images/icons/youtube.svg') }} " class="icon img-fluid mb-3" alt="icon">
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Video editing')}}
                  </h5>
                </a>
                <p class="mb-0 text-justify">
                  {{__('Digital marketing is the component of marketing that uses the internet and online digital technologies such as desktops, cell phones and other digital media and platforms to promote products and services.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="">
                  <img src="{{ asset('assets/frontend/images/icons/g.png') }} " class="icon img-fluid mb-3" alt="icon">
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Photography')}}
                  </h5>
                </a>
                <p class="mb-0 text-justify">
                  {{__('Our work consists in making you relive in image unforgettable moments thanks to shots and professional photo retouching.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <a href="{{ route('event-management') }} ">
                  <img src="{{ asset('assets/frontend/images/icons/chair.svg') }} " class="icon img-fluid mb-3" alt="icon">
                  <!-- title -->
                  <h5 class="title text-center text-uppercase">
                    {{__('Event Management')}}
                  </h5></a>
                <p class="mb-0 text-justify">
                  {{__('')}}
                </p>
              </div>
            </div>
          </div>

          <div class="links_cont position-relative d-md-flex align-items-center justify-content-end pt-1" ">
            <a href="{{route('services')}} " class="theme_btn_sh3 mr-md-2 mb-md-0 mb-2">
                <img src="{{asset('assets/frontend/images/icons/right.svg')}}" 
                class="icon img-fluid ml-1" alt="icon">
                {{__('See More')}}
              </a>
          </div>
        </div>
      </div>
    </div>
    {{-- SECTION VI  --}}
    <div class="se_vi py_xl pb_lg portfolio"
        id="portfolio"
        data-parallax="scroll"
        data-image-src="{{ asset('assets/frontend/images/bg/04.png') }}"
        data-speed=".4">
      <div class="container">
        <div class="text">
          <!-- title -->
          <div class="se_title text-center">
            <h3 class="mb-1 text-uppercase">{{__('Portfolio')}} </h3>
            <h5>zechamus when the charm becomes a behavior</h5>
          </div>
        </div>
        <!-- space -->
        <div class="space_lg"></div>
        <!-- gallery -->
        <div class="gallery">
          <!-- row -->
          <div class="row">
            <!-- col -->
            @foreach ($catalogues->portfolios as $catalogue)
            <div class="col-lg-4 col-md-4 col-sm-4">
              <!-- box -->
              <div class="gallery_box lg_box mb-2 d-flex align-items-center justify-content-center"
                 data-img-url="{{ asset('storage/catalogue/'.$catalogue->name) }}">
                 <!-- scale button -->
                 <button type="button" class="scale_btn d-inline-flex align-items-center justify-content-center">
                   <i class="fa fa-external-link"></i>
                 </button>
            </div>
         </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
