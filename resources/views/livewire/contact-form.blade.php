<div>
    
    <div class="se_viii pb_xl" id="contact">
        <div class="container">
          <!-- text -->
          <div class="text">
            <!-- title -->
            <div class="se_title text-center">
              <h3 class="mb-1 text-uppercase">{{__('Reach us now')}} </h3>
              <h2 class="mb-lg-3 mb-0 text-uppercase">
                {{__('Let\'s us know what service you are interested in')}}
              </h2>
            </div>
          </div>
          <!-- space -->
          <div class="space_lg"></div>
          <!-- form -->
          <div class="contact_form">
            <!-- row -->
            <div class="row justify-content-center">
                      <!-- col -->
                  @foreach ($services as $index => $service)
                      <div class="col-lg-3 col-md-6">
                        <!-- label -->
                        <label for="service-{{$index}}" class="mb-2 d-flex align-items-center justify-content-center">
                          <input type="radio" 
                                  id="service-{{$index}}"
                                  value="{{$index}}"
                                  wire:model.defer='selectedService'
                                  name="service"
                                  >
                          <span class="d-flex align-items-center justify-content-center w-100 h-100">
                            <i class="fa fa-check"></i>
                            {{__($service)}}
                            
                          </span>
                        </label>
                      </div>
                  @endforeach          
            </div>
            <!-- space -->
            <div class="space_l"></div>
            <h3 class="title text-uppercase text-center"><i>You are reaching us as ?</i></h3>
        
            <div class="row justify-content-center">
                    <!-- col -->

                @foreach ($typeOfUsers as $index => $typeOfUser)
                    <div class="col-lg-3 col-md-6">
                      <!-- label -->
                      <label for="user-{{$index}}" class="mb-2 d-flex align-items-center justify-content-center">
                        <input type="radio" 
                                id="user-{{$index}}"
                                value="{{$index}}"
                                wire:click='toggleTypeOfUser({{$index}}) '
                                name="userType"
                                {{$contactAsCompanyByDefault == $typeOfUser ? 'checked':''}}
                                >
                        <span class="d-flex align-items-center justify-content-center w-100 h-100">
                          <i class="fa fa-check"></i>
                          {{__($typeOfUser)}}
                        </span>
                      </label>
                    </div>
                @endforeach          
            </div>
            <!-- space -->
            
            <div class="space_l"></div>
            <!-- row -->
            <div class="row">
              <!-- col -->
              <div class="col-12 mb-3 text-center">
                <h3 class="title text-uppercase">{{__('Let\'s us know about you')}} </h3>
              </div>
              <!-- col -->
              <div class="col-md-6 mb-2">
                <label for="full_name" class="user_label w-100 mb-0">
                  <input type="text" 
                          name="full_name" 
                          id="full_name" 
                          wire:model.defer='username'
                          class="w-100" 
                          required autocomplete="off" 
                          placeholder="Full Name">
                </label>
              </div>
              <!-- col -->
              <div class="col-md-6 mb-2">
                <label for="email_address" class="user_label w-100 mb-0">
                  <input type="text" 
                          name="email_address" 
                          id="email_address" 
                          wire:model.defer='email'
                          class="w-100" 
                          required autocomplete="off" 
                          placeholder="Emaill Address">
                </label>
              </div>
              <!-- col -->

              <!-- col -->
              @if ($is_company)
                <div class="col-md-6 mb-2">
                  <label for="company_name" class="user_label w-100 mb-0">
                    <input type="text" 
                            name="company_name" 
                            id="company_name" 
                            wire:model.defer='company_name'
                            class="w-100" 
                            required autocomplete="off" 
                            placeholder="Company Name">
                  </label>
                </div>
              @endif
              <!-- col -->
              <div class="col-md-12 mb-12">
                <label for="message" class="user_label w-100 mb-0">
                  <input type="text" 
                            id="message" 
                            wire:model.defer='message'
                            class="w-100" 
                            
                            required 
                            placeholder="Enter Your Message">
                 
                </label>
              </div>
              <!-- col -->
              <div class="mt-2 col-12 text-md-left text-center">
                <!-- submit button -->
                <button type="button" 
                      class="theme_btn_sh3 text-uppercase mr-md-2 mb-md-0 mb-2"
                      wire:click.prevent='sendData'>{{__('Send Now')}} </button>
                <!-- social list -->
                <ul class="social_list list-unstyled d-inline-flex align-items-center mb-0 align-middle mx-lg-0 mx-auto">
                  <li class="mr-2"><a href="https://www.instagram.com/zechamus.pro/" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-instagram"></i></a></li>
      
                  <li class="mr-2"><a href="https://www.linkedin.com/company/zechamus/?viewAsMember=true" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-linkedin-square"></i></a></li>
                  <!--li class="mr-2"><a href="#" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-facebook-square"></i--></a></li>
                  <!--li><a href="#" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-github"></i></a></li-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
</div>
