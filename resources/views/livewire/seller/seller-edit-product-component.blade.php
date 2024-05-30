<div>
    <!-- Content wrapper -->
     <div class="content-wrapper">
       <!-- Content -->

       <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form/</span> Edit Product</h4>
         <a style="margin-bottom: 10px;" class="btn btn-primary" href="{{ route('seller.products') }}">Products</a>

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
                 <form wire:submit.prevent="updateProduct">
                   <div class="row mb-3">
                     <label class="col-sm-2 col-form-label" for="name">Name</label>
                     <div class="col-sm-10">
                       <input type="text" name="name" class="form-control" placeholder="Name" wire:model="name" wire:keyup="generateSlug" />
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                     <label class="col-sm-2 col-form-label" for="slug">Slug</label>
                     <div class="col-sm-10">
                       <input
                         name="slug"
                         type="text"
                         class="form-control"
                         placeholder="Slug"
                         wire:model="slug"
                       />
                       @error('slug')
                       <p class="text-danger">{{ $message }}</p>
                       @enderror
                     </div>
                   </div>
                   <div class="row mb-3">
                       <label class="col-sm-2 col-form-label" for="short_description">Short description</label>
                    <div class="col-sm-10">
                    <textarea name="short_description" class="form-control" placeholder="Short description" wire:model="short_description" cols="30" rows="5"></textarea>
                     @error('short_description')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Description</label>
                    <div class="col-sm-10">
                    <textarea name="description" class="form-control" placeholder="Description" wire:model="description" cols="30" rows="10"></textarea>
                     @error('description')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="price">Price</label>
                    <div class="col-sm-10">
                    <input type="number" name="price" class="form-control" placeholder="Price" wire:model="price" />
                     @error('price')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sku">SKU</label>
                    <div class="col-sm-10">
                    <input type="text" name="sku" class="form-control" placeholder="SKU" wire:model="sku" />
                     @error('sku')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="stock_status" wire:model="stock_status">Stock Status</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="stock_status">
                         <option value="instock">Instock</option>
                         <option value="outofstock">Out of Stock</option>
                    </select>
                     @error('stock_status')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="featured" wire:model="featured">Featured</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="featured">
                         <option value="0">No</option>
                         <option value="1">Yes</option>
                    </select>
                     @error('featured')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="quantity">Quantity</label>
                    <div class="col-sm-10">
                    <input type="number" name="quantity" class="form-control" placeholder="Quantity" wire:model="quantity" />
                     @error('quantity')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="quantity">Liter</label>
                    <div class="col-sm-10">
                    <input type="number" name="liter" step=".01" class="form-control" placeholder="Liter" wire:model="liter" />
                     @error('liter')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="category_id">Category</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="category_id" wire:model="category_id">
                         <option value="">Select Category</option>
                         @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                         @endforeach
                       </select>
                    </select>
                     @error('category_id')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                   </div>
                   </div>
                   <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" wire:model="newimage">
                    @if ($newimage)
                        <img src="{{ $newimage->temporaryUrl() }}" width="120">
                    @else
                         <img src="{{ asset('assets/img/') }}/{{ $image }}" width="120">
                    @endif
                    @error('newimage')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                   </div>
                   </div>
                   <div class="row justify-content-end">
                     <div class="col-sm-10">
                       <button type="submit" class="btn btn-primary">Update</button>
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
