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
                <div class="col-12 ">
                    <div class="card-body row"> 
                          <div class="mb-3 col-6">
                            <label class="col-form-label" for="basic-default-name">Catalogue Name</label>
                            <div class="col-md-10">
                              <input type="text" 
                                    class="form-control" 
                                    id="basic-default-name"
                                    wire:model.defer='name'/>
                              @error('name') <p class="text-danger"><i>{{$message}} </i></p> @enderror
                            </div>
                          </div>
                          <div class="button-wrapper">
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
                            <p class="text-muted">Allowed JPG,PNG. Max size of 2048K</p>
                            @error('cover') <p class="text-danger"><i>{{$message}} </i></p> @enderror
                            <button class="btn btn-primary" wire:click.prevent="add">Save</button>
                                
                        </div>
                      </div>                    
                </div>

            <hr class="my-5" />

                <div class="row mb-5">
                    @foreach ($catalogues as $catalogue)
                    <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{asset('storage/catalogue/cover/'.$catalogue->cover)}}" alt="cover" />
                        <div class="card-body">
                        <h5 class="card-title text-center text-uppercase">{{$catalogue->name}} </h5>
                        <div class="row">
                          <a type="button" class="btn {{$catalogue->front_page==1? 'btn-primary text-white':'btn-outline-primary' }}"
                                      wire:click.prevent="setFrontPagePortfolio('{{$catalogue->id}}')">Front Page</a>
                            <a href="" class="btn btn-outline-secondary"
                            data-bs-toggle="modal"
                                        data-bs-target="#editCataloagueModal"
                                        wire:click.prevent="getCatalogueInfo('{{$catalogue->id}}')">Edit</a>
                            <a href="" class="btn btn-outline-danger"
                                        wire:click.prevent="delete('{{$catalogue->id}}')">
                                        Delete
                            </a>

                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                </div>
               
            </div>
            
        </div>


             

                  <!-- Modal -->
                  <div wire:ignore.self class="modal fade" id="editCataloagueModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                      <form class="modal-content">
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
                              <label for="name" class="form-label">Catalogue Name</label>
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
                                wire:click.prevent="update"
                                >Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
              </div>
    </div>

<script>
window.addEventListener('updated', event => {
    $('#editCataloagueModal').modal('hide')
    $('#deleteUserModal').modal('hide')
})
</script>
</div>
