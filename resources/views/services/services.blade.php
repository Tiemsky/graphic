@extends('layouts.master')
@section('content')
<div data-parallax="scroll mb-5"
        data-image-src="{{ asset('assets/frontend/images/bg/03.png') }} ">
    <!-- SECTION III - SERVICES SECTION -->
    <div class="se_iii py_xl" id="se_iii" >
        <div class="container">
            <!-- title -->
            <div class="se_title">
                <h4 class="mb-3 text-uppercase" id="services">
                    {{__('Our Services')}}
                </h4>
            </div>
            <!-- space -->
            <div class="space_sm"></div>
            <!-- row -->
            <div class="row  text-center">
                <!-- col -->
                <div class="col-lg-6 col-md-6 mb-2">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="{{route('graphic-design')}} ">
                            <img src="{{ asset('assets/frontend/images/icons/3d.svg') }}"
                                class="icon img-fluid mb-3" alt="icon" >
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Graphic Design')}}
                            </h5>
                        </a>
                        <p class="mb-0">{{__('Graphic design is the art of creating images through the composition of colors, lines, textures and shapes.')}} </p>

                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-md-6 mb-2">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="{{route('digital-marketing')}} ">
                            <img src="{{ asset('assets/frontend/images/icons/popular.svg')}}" class="icon img-fluid mb-3" alt="icon">
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Digital Marketing')}}
                            </h5>
                        </a>
                        <p class="mb-0">
                            {{__('Our job is to take your message and deliver it visually to a story that engages your audience, grabs attention and moves your viewers to action.')}}
                        </p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-md-6 mb-2">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="{{route('web-mobile-dev')}} ">
                            <img src="{{ asset('assets/frontend/images/icons/slow-motion.svg')}}" class="icon img-fluid mb-3" alt="icon">
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Website & Mobile Applications')}}
                            </h5>
                        </a>
                        <p class="mb-0">
                            {{__('We design for you all types of professional websites and applications respecting the international norms and standards.')}}
                        </p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-md-6 mb-md-0 mb-2">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="">
                            <img src="{{ asset('assets/frontend/images/icons/youtube.svg') }} " class="icon img-fluid mb-3" alt="icon">
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Video Editing')}}
                            </h5>
                        </a>
                        <p class="mb-0">
                            {{__('Digital marketing is the component of marketing that uses the internet and online digital technologies such as desktops, cell phones and other digital media and platforms to promote products and services.')}}
                        </p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-md-6 mb-md-0 mb-2">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="">
                            <img src="{{ asset('assets/frontend/images/icons/g.png') }}" class="icon img-fluid mb-3" alt="icon">
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Photography')}} 
                            </h5>
                        </a>
                        <p class="mb-0">
                            {{__('Our work consists in making you relive in image unforgettable moments thanks to shots and professional photo retouching.')}}
                        </p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-md-6">
                    <!-- box -->
                    <div class="box">
                        <!-- icon -->
                        <a href="{{route('event-management')}} " >
                            <img src="{{ asset('assets/frontend/images/icons/chair.svg') }} " class="icon img-fluid mb-3" alt="icon">
                            <!-- title -->
                            <h5 class="title mb-2 text-uppercase">
                                {{__('Event Management')}}
                            </h5>
                        </a>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
