@extends('layouts.master')
@section('content')
<main class="ml-auto">
    <!-- SECTION II -->
    <div class="se_ii theme_section text-md-left text-center" 
        id="about_me" 
        data-parallax="scroll" 
        data-image-src="{{asset('/assets/frontend/images/bg/01.png')}} " 
        data-speed=".4">
      <div class="container">
        <!-- row -->
          <!-- col -->
          <div class="col-lg-12 col-md-9 ml-auto">
            <!-- text -->
            <div class="text">
              <!-- title -->
              <div class="se_title" >

      <!-- tiemsky div class="home_se theme_section position-relative text-md-left text-center" id="home" data-parallax="scroll" data-image-src="assets/images/bg/bg.jpg"-->

                <h3 class="mb-1 text-uppercase">{{__('graphic design & computer graphics.')}} </h3>
              </div>
              <div class="mb-5 text-justify">
                <p>
                  {{__('We are a graphic design and computer graphics agency, indeed it is important for you and your company to have a very good graphic presentation. Your graphic presentation is all the elements that make up your image. For that it must be built with care and efficiency to be effective and adapted to your customers. Our agency is expert in graphic design with more than 7 years of experience in the field.')}}
                  </p> 
                  <p> {{__('Nowadays graphic design has become an integral part of business in physical and virtual markets. A reason for companies demanding more and more graphic design items and the need for effective communication with the public.')}}
                  </p>
              </div>

               <div class="col-lg-7 col-md-9 ml-auto">
              <!-- title -->
            <div class="se_title" >
              <div class="home_se theme_section position-relative text-md-left text-center" data-parallax="scroll">
                <h3 class="mb-1">{{__('Why a good graphic presentation?')}} </h3>
                <!--h2 class="mb-lg-3 mb-0 text-uppercase">
                  conception <br> graphiques &amp; infographique.</h2-->
              </div>
              <div class="mb-1 text-justify">
                <p>
                  {{__('Your graphic design is the reflection of your company, on the web more than anywhere else, you have only a few seconds to seduce your customers, your graphic design is very important. Indeed a bad visual identity has repercussions on your company, your brand and your products. For this you must pay attention to your graphic design. All your visuals (logos, business cards, flyers, posters ...) must be designed by experts. A simple graphic badly designed or with a bad message can have enormous repercussions on your company.')}}
                  </p> 
                  <p>
                    {{__('That\'s why zechamus is committed to providing you with quality graphics that will impact your customers and prospects in a direct or indirect.')}}
                </p>
              </div>
 
              <!-- links container -->
              <div class="links_cont position-relative d-md-flex align-items-center justify-content-start pt-1">
                <a class="theme_btn_sh3 mr-md-2 mb-md-0 mb-2"> 
                  {{__('Visit Our Portfolio')}} 
                  <img src="{{asset('assets/frontend/images/icons/download.svg')}}" 
                    class="icon img-fluid ml-1" alt="icon"></a>
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

  
      <!-- SECTION III - SERVICES SECTION -->
      <div class="se_iii py_xl" id="se_iii" >
        <div class="container">
          <!-- title -->
          <div class="se_title">
            <h3 class="mb-1 text-uppercase">{{__('Access the digital world')}}  </h3>
            <h5 class="mb-3" id="services"> 
              {{__('We accompany you in the digital world through our different marketing services that we put at your disposal, in order to allow you to access the maximum number of customers possible.')}}
            </h5>
          </div>
          <!-- space -->
          <div class="space_sm"></div>
          <!-- row -->
          <div class="row text-md-left text-center">
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box" >
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/social.svg')}} " class="icon img-fluid mb-3" alt="icon" >
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer ">
                    {{__('Community Management')}} 
                  </a>
                </h5>
                <p class="mb-0">
                  {{__('Graphic design is the creation of images through the composition of colors, lines, textures and shapes.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/seo.svg')}} " class="icon img-fluid mb-3" alt="icon">
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer ">
                    {{__('SEO')}}
                  </a>
                </h5>
                <p class="mb-0">
                  {{__('Video editing is the art of creating a story using a combination of footage, color, typography, symbols, and more. This means it would be very useful if you have design skills while editing videos.')}}  
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/globe.svg')}} " class="icon img-fluid mb-3" alt="icon">
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer">
                    {{__('Website Optimization')}}
                  </a>
                </h5>
                <p class="mb-0">
                  {{__('Digital marketing is the component of marketing that uses the internet and online digital technologies such as desktops, cell phones and other digital media and platforms to promote products and services.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/email.svg')}}" class="icon img-fluid mb-3" alt="icon">
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer ">
                    {{__('Emailing')}}
                  </a>
                </h5>
                <p class="mb-0">
                  {{__('Digital marketing is the component of marketing that uses the internet and online digital technologies such as desktops, cell phones and other digital media and platforms to promote products and services.')}}
                </p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/digital.svg')}} " class="icon img-fluid mb-3" alt="icon">
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer ">
                    {{__('Strategy Marketing')}}
                  </a>
                </h5>
                <p class="mb-0">.</p>
              </div>
            </div>
            <!-- col -->
            <div class="col-lg-4 col-md-6">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <img src="{{asset('assets/frontend/images/icons/branding.svg')}} " class="icon img-fluid mb-3" alt="icon">
                <!-- title -->
                <h5 class="title mb-2">
                  <a href="#" style="color: white ; cursor: pointer ">
                    {{__('Branding')}} 
                  </a>
                </h5>
                <p class="mb-0">
                  
                </p>
              </div>


            </div>
          </div>
        </div>
      </div>

  </main>
@endsection
