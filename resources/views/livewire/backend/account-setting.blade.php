<div>
             <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Account</h4>

            <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);">
                        <i class="bx bx-user me-1"></i>
                        Account
                    </a>
                </li>
                </ul>
                <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img
                        alt="user-avatar"
                        class="d-block rounded"
                        height="100"
                        width="100"
                        id="uploadedAvatar"
                        
                        @if ($user->avatar)
                            src="{{asset('storage/avatar/'.$user->avatar)}} "
                        @else
                            @if ($user->gender =='male')
                                    src="{{asset('assets/backend/img/avatars/male.jpg')}} "
                            @else
                                    src="{{asset('assets/backend/img/avatars/female.jpg')}} "
                            @endif
                        @endif
                     



                    />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg"
                            wire:model.defer="avatar"
                        />
                        </label>
                        <button type="button" 
                                class="btn btn-outline-secondary account-image-reset mb-4"
                                wire:click.prevent="uploadPhoto"
                                wire:loading.attr="disabled">
                        <i class="bx d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                        </button>                       

                        <p class="text-muted mb-0">Allowed JPG,PNG. Max size of 2048K</p>
                        @error('avatar') <p class="text-danger"><i>{{$message}} </i></p> @enderror
                            
                    </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-ms-12 mb-4">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                                class="form-control"
                                type="text"
                                id="firstName"
                                wire:model.defer='firstName'
                                autofocus
                            />
                            </div>
                            <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" 
                                    type="text" 
                                    id="lastName" 
                                    wire:model.defer='lastName' />
                            </div>
                            <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                                class="form-control"
                                type="text"
                                id="email"
                                wire:model.defer='email'
                                disabled

                            />
                            </div>
                            <div class="mb-3 col-md-6">
                            <label for="gender" class="form-label">gender</label>
                            <input
                                type="text"
                                class="form-control"
                                id="gender"
                                value="{{$user->gender}} "
                                disabled
                            />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2" wire:click.prevent='updateProfile'>Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            
                        </div>
                        

                    </div>

                    <div class="col-lg-12 col-md-12 col-ms-12 mb-4">
                        @if ($notification)
                            <div class="mb-4">
                                <span class="alert alert-danger text-danger">{{ $message }} </span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="mb-4 col-md-4">
                            <label for="current-password" class="form-label">current-password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="current-password"
                                wire:model.defer="currentPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="current-password"

                            />
                            @error('currentPassword')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            </div>

                            <div class="mb-4 col-md-4">
                                <label for="new-password" class="form-label">New Password</label>
                                <input
                                    class="form-control"
                                    type="password"
                                    id="new-password"
                                    wire:model.defer="newPassword"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="new-password"
                                />
                                @error('newPassword')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            </div>

                            <div class="mb-4 col-md-4">
                                <label for="password-confirmation" class="form-label">Password Confirmation</label>
                                <input
                                    class="form-control"
                                    type="password"
                                    id="password-confirmation"
                                    wire:model.defer="passwordConfirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password-confirmation"
                                />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button"
                                    class="btn btn-primary me-2"
                                    wire:click.prevent='passwordChange'>Change Password</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>

                    </div>
                </div>
                <!-- /Account -->
                </div>
                <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-3">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        wire:model.defer="accountActivation"
                        id="accountActivation"
                        />
                        <label class="form-check-label" for="accountActivation"
                        >I confirm my account deactivation</label
                        >
                        <div>
                            @error('accountActivation')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <button type="button"
                            class="btn btn-danger deactivate-account"
                            wire:click.prevent='deleteAccountAlert'>Deactivate Account</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- / Content -->

       



        <div class="content-backdrop fade"></div>
    </div>
              <!-- Content wrapper -->

                   <!--Edit User Modal -->
                   <div class="col-lg-4 col-md-3">
                    <div class="mt-3">
                      <!-- Modal -->
                      <div wire:ignore.self class="modal fade" id="openDeleteAccountModal" data-bs-backdrop="static" tabindex="-1">
                        <div class="modal-dialog">
                          <form class="modal-content" wire:submit.prevent="addNewUser">
                            <div class="modal-header">
                              <h5 class="modal-title" id="backDropModalTitle">Update User</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-0">
                                  <label for="username" class="form-label">Name</label>
                                  <input
                                    type="text"
                                    id="username"
                                    class="form-control"
                                    wire:model.defer='name'
                                  />
                                  @error('name')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                                </div>
                              </div>



                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit"
                                    class="btn btn-primary"
                                    >Update</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

              <script>
                window.addEventListener('openDeleteAccountModal', event => {
                    $('#openDeleteAccountModal').modal('show')
                    $('#deleteUserModal').modal('hide')
                })
              </script>
</div>
