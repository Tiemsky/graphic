<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Dashboard /</span>
            </h4>
            <div class="row">
                <div class="col-12 ">
                    <div class="card-body row"> 
                          <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2" tabindex="0">
                            <span class="d-none d-sm-block">Upload {{$catalogue ? $catalogue->name :''}} </span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                                type="file"
                                id="upload"
                                class="account-file-input"
                                hidden
                                accept="image/png, image/jpeg"
                                wire:model.defer="image"
                            />
                            </label>
                            <p class="text-muted">Allowed JPG,PNG. Max size of 10MB</p>
                            @error('image') <p class="text-danger"><i>{{$message}} </i></p> @enderror
                            <button class="btn btn-primary" wire:click.prevent="addPortfolio">Save</button>
                                
                        </div>
                      </div>                    
                </div>

            <hr class="my-5" />
                 <div class="row mb-5">
                  @if ($catalogue)
                  @foreach ($catalogue->portfolios as $portfolio)
                    
                  <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                      <img class="card-img-top" src="{{asset('storage/catalogue/'.$portfolio->name)}}" alt="cover" />
                      <div class="card-body">
                      <h5 class="card-title text-center text-uppercase">{{$portfolio->name}} </h5>
                      <div class="row">
                       
                          <a type="button" class="btn btn-outline-danger"
                                      wire:click.prevent="delete({{$portfolio->id}})">
                                      Delete
                          </a>

                      </div>
                      </div>
                  </div>
                  </div>
                  @endforeach
                      
                  @endif
                </div> 
               
            </div>
            
        </div>


             

                  <!-- Modal -->
                  <div wire:ignore.self class="modal fade" id="editCataloagueModal" data-bs-backdrop="static" tabindex="-1">
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
                            <div class="col mb-1">
                              <label for="name" class="form-label">Last Name</label>
                              <input
                                type="text"
                                id="name"
                                class="form-control"
                                wire:model.defer='name'
                              />
                              @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-1">
                                <label for="upload" class="btn btn-primary me-2" tabindex="0">
                                    <span class="d-none d-sm-block">Cover Picture</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input
                                        type="file"
                                        id="upload"
                                        class="account-file-input"
                                        hidden
                                        accept="image/png, image/jpeg"
                                        wire:model.defer="cover"
                                    />
                                    </label>
                            </div>
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
    </div>

<script>
window.addEventListener('closeModal', event => {
    $('#backDropModal').modal('hide')
    $('#deleteUserModal').modal('hide')
})
</script>
</div>
