@extends('.layouts.catalogue')
@section('content')
  <div class="home_se theme_section position-relative text-md-left text-center"
      id="home" data-parallax="scroll"
      data-image-src="{{ asset('assets/catalogue/images/back.jpg') }} " alt=>
    <div class="container">
      <!-- text -->
      <div class="text">
        <!-- space -->
        <div class="py-md-3 py-2"></div>
      </div>
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
      </div>
      </div>
    </header>
    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">
        @foreach ($catalogues as $catalogue)
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3 cover">{{__($catalogue->name)}} </h2>
              <a href="{{route('display-catalogue-front',[$catalogue->slug])}}" class="btn btn-outline-white py-2 px-4">
                  {{__('See More')}}
              </a>
            </div>
            <img src="{{ asset('storage/catalogue/cover/'.$catalogue->cover) }}" alt="Cover" class="img-fluid">
          </div>
        </div>
            
        @endforeach
      
      </div>
    </div>
  </div>

@endsection
