<div class="navbar-nav flex-row align-items-center ms-auto">
    
    <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->
        <li class="nav-item lh-1 me-3">
        </li>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img alt="profile" class="w-px-40 h-auto rounded-circle" 
              @if (Auth::user()->avatar)
              src="{{asset('storage/avatar/'.Auth::user()->avatar)}} "
          @else
              @if (Auth::user()->gender =='male')
                      src="{{asset('assets/backend/img/avatars/male.jpg')}} "
              @else
                      src="{{asset('assets/backend/img/avatars/female.jpg')}} "
              @endif
          @endif/>
               
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img  class="w-px-40 h-auto rounded-circle" 
                              alt="profile"
                      
                      
                      @if (Auth::user()->avatar)
                      src="{{asset('storage/avatar/'.Auth::user()->avatar)}} "
                  @else
                      @if (Auth::user()->gender =='male')
                              src="{{asset('assets/backend/img/avatars/male.jpg')}} "
                      @else
                              src="{{asset('assets/backend/img/avatars/female.jpg')}} "
                      @endif
                  @endif/>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">{{ Auth::user()->lastName }} </span>
                    <small class="text-muted"><i>Online</i></small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a type="button" class="dropdown-item"
              onclick="document.getElementById('logOutForm').submit();">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
</div>