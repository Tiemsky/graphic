<div>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4">
                    <span class="text-muted fw-light">Dashboard /</span>
                    User Managements
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a type="button" data-bs-toggle="modal"
                                data-bs-target="#backDropModal"
                                class="nav-link active" href="javascript:void(0);">
                                <i class="bx bx-plus me-1"></i>
                                 Add user
                                </a>
                            </li>

                           @if (Auth::user()->role >= 1)
                            <li class="nav-item">
                                <a type="button"
                                class="nav-link btn-outline-info"
                                wire:click.prevent="toggleRegistration">
                                <i class="bx bxs-key me-1"></i>
                                Enable Registration
                                </a>
                            </li>
                           @endif

                        </ul>
                        <div>
                          <span><i>Registration status: </i></span><span><i><strong class="{{$registration->is_registration_enabled ==true ? 'text-success': ''}}">{{$registration->is_registration_enabled ==1 ? 'On': 'Off'}}</strong></i></span>
                        </div>
                    </div>
                </div>

                <hr class="my-5" />

                <!-- Hoverable Table rows -->
                <div class="card">
                  <h5 class="card-header">Users Table</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr class="text-nowrap">
                          <th>SN0</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ ++$loop->index }} </th>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                            <strong>{{ $user->lastName }} </strong>
                          </td>
                          <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                            <strong>{{ $user->firstName }} </strong>
                          </td>
                          <td>{{ $user->email }} </td>
                          <td>
                          
                              <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                              {{ $user->role == 1 ? 'Adminstrator':'User' }}
                          
          
                          </td>
                            <td>
                                <span class="badge bg-label-{{ $user->email_verified_at ? 'success':'warning'}} me-1">
                                    {{ $user->email_verified_at ? 'ACTIVE': 'PENDING' }}
                                </span>
                            </td>
                          <td>
                            <a  type="button"
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteUserModal"
                            wire:click.prevent="getUserInfo('{{$user->id}}')"
                          ><i class="bx bx-trash me-1"></i>Delete</a
                        >
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!--/ Hoverable Table rows -->
            </div>

               <!-- Add New User Modal -->
               <div class="col-lg-4 col-md-3">
                <div class="mt-3">
                  <!-- Modal -->
                  <div wire:ignore.self class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                      <form class="modal-content" wire:submit.prevent="addNewUser">
                        <div class="modal-header">
                          <h5 class="modal-title" id="backDropModalTitle">Add New User</h5>
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
                              <label for="lastName" class="form-label">Last Name</label>
                              <input
                                type="text"
                                id="lastName"
                                class="form-control"
                                placeholder="Enter Last Name"
                                wire:model.defer='lastName'
                              />
                              @error('lastName')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-0">
                              <label for="firstName" class="form-label">First Name</label>
                              <input
                                type="text"
                                id="firstName"
                                class="form-control"
                                placeholder="Enter First Name"
                                wire:model.defer='firstName'
                              />
                              @error('firstName')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            </div>
                          </div>
                          <div class="row g-2">
                            <div class="col mb-0">
                              <label for="emailBackdrop" class="form-label">Email</label>
                              <input
                                type="text"
                                id="emailBackdrop"
                                class="form-control"
                                placeholder="xxxx@xxx.xx"
                                wire:model.defer="email"
                              />
                                @error('email')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>
                          </div>

                          <div class="row g-2">
                            <div class="col mb-0">
                              <label for="role" class="form-label">Gender</label>
                              <select class="form-control" id="role" wire:model.defer="gender">
                                <option value=""><i>Assign Gender</i> </option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                             </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                          </div>
                        </div>

                          <div class="row g-2">
                            <div class="col mb-0">
                              <label for="role" class="form-label">Role</label>
                              <select class="form-control" id="role" wire:model.defer="role">
                                <option value=""><i>Assign role</i> </option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                             </select>
                                @error('role')
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
                                >Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>


            <!-- Delete User Modal -->
            <div class="col-lg-4 col-md-3">
                <div class="mt-3">
                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade" id="deleteUserModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" wire:submit.prevent="delete">
                        <div class="modal-header">
                            <h5 class="modal-title" id="backDropModalTitle">Are You Sure?</h5>
                            <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <h3>Are you sure to delete this user?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                            </button>
                            <button type="submit"
                                class="btn btn-primary"
                                >Done</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
          window.addEventListener('closeModal', event => {
              $('#backDropModal').modal('hide')
              $('#deleteUserModal').modal('hide')
          })
          </script>

</div>

