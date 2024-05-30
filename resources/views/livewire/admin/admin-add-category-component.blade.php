 <div>
     <!-- Content wrapper -->
     <div class="content-wrapper">
         <!-- Content -->

         <div class="container-xxl flex-grow-1 container-p-y">
             <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Form/</span> Add Category</h4>
             <a class="btn btn-primary" href="{{ route('admin.categories') }}" style="margin-bottom: 10px;">Categories</a>

             <!-- Basic Layout & Basic with Icons -->
             <div class="row">
                 <!-- Basic Layout -->
                 <div class="col-lg-6">
                     <div class="card mb-4">
                         {{-- <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Basic Layout</h5>
              <small class="text-muted float-end">Default label</small>
            </div> --}}
                         <div class="card-body">
                             @if (Session::has('message'))
                                 <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                             @endif
                             @if (Session::has('failure'))
                                 <div class="alert alert-danger" role="alert">{{ Session::get('failure') }}</div>
                             @endif
                             <form wire:submit.prevent="storeCategory">
                                 <div class="row mb-3">
                                     <label class="col-sm-2 col-form-label" for="name">Name</label>
                                     <div class="col-sm-10">
                                         <input class="form-control" name="name" placeholder="Name" type="text"
                                             wire:keyup="generateSlug" wire:model="name" />
                                         @error('name')
                                             <p class="text-danger">{{ $message }}</p>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="row mb-3">
                                     <label class="col-sm-2 col-form-label" for="slug">Slug</label>
                                     <div class="col-sm-10">
                                         <input class="form-control" name="slug" placeholder="Slug" type="text"
                                             wire:model="slug" />
                                         @error('slug')
                                             <p class="text-danger">{{ $message }}</p>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="row mb-3">
                                     <label class="col-sm-2 col-form-label" for="image">Image</label>
                                     <div class="col-sm-10">
                                         <input class="form-control" name="image" type="file" wire:model="image">
                                         @if ($image)
                                             <img src="{{ $image->temporaryUrl() }}" width="120">
                                         @endif
                                         @error('image')
                                             <p class="text-danger">{{ $message }}</p>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="row justify-content-end">
                                     <div class="col-sm-10">
                                         <button class="btn btn-primary" type="submit">Create</button>
                                     </div>
                                 </div>
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

 </div>
