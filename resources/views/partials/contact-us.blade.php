SECTION VIII -->
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
        <form action="#" method="post" class="contact_form" id="contact_form">
          <!-- row -->
          <div class="row justify-content-center">
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_1" class="mb-2 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_1" name="radio_group" checked>
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i>
                  {{__('Graphic Design')}}
                </span>
              </label>
            </div>
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_2" class="mb-2 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_2" name="radio_group">
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i> 
                  {{__('Digital Marketing')}} 
                </span>
              </label>
            </div>
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_3" class="mb-2 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_3" name="radio_group">
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i> 
                  {{__('Video Editing')}} 
                </span>
              </label>
            </div>
            <!-- col -->
            <div class="col-12 d-lg-flex d-none"></div>
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_4" class="mb-2 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_4" name="radio_group">
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i> 
                  {{__('Web App & Mobile App')}}  
                </span>
              </label>
            </div>
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_5" class="mb-2 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_5" name="radio_group">
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i>
                   {{__('Photography')}} 
                  </span>
              </label>
            </div>
            <!-- col -->
            <div class="col-12 d-lg-flex d-none"></div>
            <!-- col -->
            <div class="col-lg-3 col-md-6">
              <!-- label -->
              <label for="rad_6" class="mb-0 d-flex align-items-center justify-content-center">
                <input type="radio" id="rad_6" name="radio_group">
                <span class="d-flex align-items-center justify-content-center w-100 h-100">
                  <i class="fa fa-check"></i>
                  {{__('Others')}}
                </span>
              </label>
            </div>
          </div>


          <!-- space -->
          <div class="space_xl"></div>
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
                        class="w-100" 
                        required autocomplete="off" 
                        placeholder="Emaill Address">
              </label>
            </div>
            <!-- col -->
            <div class="col-md-6 mb-2">
              <label for="company_name" class="user_label w-100 mb-0">
                <input type="text" name="company_name" id="company_name" class="w-100" required autocomplete="off" placeholder="Company Name">
              </label>
            </div>
            <!-- col -->
            <div class="col-md-6 mb-4">
              <label for="position" class="user_label w-100 mb-0">
                <input type="text" name="position" id="position" class="w-100" required autocomplete="off" placeholder="Enter Your Message">
              </label>
            </div>
            <!-- col -->
            <div class="col-12 text-md-left text-center">
              <!-- submit button -->
              <button type="submit" id="form_submit_btn" class="theme_btn_sh3 text-uppercase mr-md-2 mb-md-0 mb-2">{{__('Send Now')}} </button>
              <!-- social list -->
              <ul class="social_list list-unstyled d-inline-flex align-items-center mb-0 align-middle mx-lg-0 mx-auto">
                <li class="mr-2"><a href="https://www.instagram.com/zechamus.pro/" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-instagram"></i></a></li>

                <li class="mr-2"><a href="https://www.linkedin.com/company/zechamus/?viewAsMember=true" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-linkedin-square"></i></a></li>
                <!--li class="mr-2"><a href="#" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-facebook-square"></i--></a></li>
                <!--li><a href="#" target="_blank" class="d-inline-flex align-items-center"><i class="fa fa-github"></i></a></li-->
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
