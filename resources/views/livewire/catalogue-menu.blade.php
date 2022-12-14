
   

<div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
      <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
        <li><a href="{{route('home')}}">{{__('Home')}} </a></li>
        <li class="has-children active">
          <a href="">{{__('Gallery')}} </a>
          <ul class="dropdown">
            @foreach ($catalogues as $catalogue)
            <li><a href="{{route('display-catalogue-front',[$catalogue->slug])}}">{{__($catalogue->name)}}</a></li>
            @endforeach
            </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>