@extends('layouts.catalogue')
@section('content')
<div class="site-section"  data-aos="fade">
  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-7">
        <div class="row mb-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">{{$catalogue->name}} </h2>
          </div>
        </div>
      </div>

    </div>
    <div class="row" id="lightgallery">
     @foreach ($catalogue->portfolios as $portfolio)
     <div class="col-xs-2 col-sm-6 col-md-4 col-lg-3 col-xl-3 item" 
     data-aos="fade" data-src="{{asset('storage/catalogue/'.$portfolio->name)}}" 
     data-sub-html="Signed Zechamus">
        <a href="#"><img src="{{asset('storage/catalogue/'.$portfolio->name)}} " alt="IMage" class="img-fluid square "></a>
        </div>
    
     @endforeach

    </div>
  </div>
</div>
<script  src="{{ asset('assets/catalogue/js/jquery-3.3.1.min.js') }}"></script>
<script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
@endsection



