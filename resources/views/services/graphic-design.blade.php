@extends('layouts.master')
@section('content')
<main>
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
                <h3 class="mb-0 text-uppercase">
                    {{__('an agency of graphic design & computer graphics.')}}
                </h3>
            </div>
            <p class="mb-5 text-justify">
            {{__('We are a graphic design and computer graphics agency, indeed it is important for you and your company to have a very good graphic presentation. Your graphic presentation is all the elements that make up your image. For that it must be built with care and efficiency to be effective and adapted to your customers. Our agency is expert in graphic design with more than 7 years of experience in the field.')}}
            {{__('Nowadays graphic design has become an integral part of business in physical and virtual markets. A reason for companies demanding more and more graphic design items and the need for effective communication with the public. ')}}
            </p>

            <div class="se_title" >                     
            <h3 class="mb-0 text-uppercase">{{__('Why a good graphic presentation ?')}} </h3>
        </div>
        <p class="mb-5 text-justify">
            {{__('Your graphic presentation is the reflection of your company, On the web more than elsewhere, you have only a few seconds to seduce your customers, Your graphic presentation is very important. Indeed a bad visual identity has repercussions on your company, your brand and your products. All your visuals (logos, business cards, flyers, posters ...) must be designed by experts. A simple graphic badly conceived or with a bad message can have enormous repercussions on your company. That is why zechamus is committed to offer you quality graphics which will impact in a direct or indirect way your customers and your prospects.')}}
        </p>
        <!-- links container -->
        <div class="links_cont position-relative d-md-flex align-items-center justify-content-start pt-1">
            <a href="{{ route('catalogue.index') }} " class="theme_btn_sh3 mr-md-2 mb-md-0 mb-2">{{__('Visit Our Portfolio')}}
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
</main>
@endsection
