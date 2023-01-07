@extends('layouts.dashboard')
@section('content')
<div>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-lg-12 mb-4 order-0">
                        <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Happy to see you {{Auth::user()->lastName}} {{Auth::user()->firstName}}! 🎉</h5>
                                <div class="mb-4">
                                    <p>Let's us get you updated about the day: <span class="fw-bold">{{Date('D, d M Y')}}</span></p>          
                                    <p>Your current time is: <span class="fw-bold">{{Date('h:i:s')}}</span></p>          
                                </div>
    
                                <a type="button" class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img
                                src="{{asset('assets/backend/img/illustrations/man-with-laptop-light.png')}} "
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Total Revenue -->
                    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex text-center">
                                    
                                    </div>
                                    <h6 class="text-center"> Number of users</h6>
                                    <h3 class="card-title mb-2 text-center">{{\App\Models\User::where('role','<=', 1)->count()}} </h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Revenue -->
                </div>
            <!-- / Content -->
            </div>
        </div>
       
        <!-- Content wrapper -->
</div>

 


@endsection
