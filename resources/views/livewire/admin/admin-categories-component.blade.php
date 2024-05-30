 <div>
     <!-- Content wrapper -->
     <div class="content-wrapper">
         <!-- Content -->

         <div class="container-xxl flex-grow-1 container-p-y">
             <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Table /</span> Categories</h4>

             <a class="btn btn-primary" href="{{ route('admin.category.add') }}" style="margin-bottom: 10px;">Add
                 Category</a>
             <!-- Bordered Table -->
             <div class="card">
                 <h5 class="card-header">Bordered Table</h5>
                 <div class="card-body">
                     <div class="table-responsive text-nowrap">
                         @if (Session::has('message'))
                             <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                         @endif
                         <table class="table-bordered table">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Image</th>
                                     <th>Name</th>
                                     <th>Slug</th>
                                     {{-- <th>Status</th> --}}
                                     <th>Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @php
                                     $i = ($categories->currentPage() - 1) * $categories->perPage();
                                 @endphp
                                 @foreach ($categories as $category)
                                     <tr>
                                         <td>
                                             {{ ++$i }}
                                         </td>
                                         <td>
                                             <img alt="{{ $category->name }}"
                                                 src="{{ asset('assets/img') }}/{{ $category->image }}" width="100px">
                                         </td>
                                         <td>{{ $category->name }}</td>
                                         <td>{{ $category->slug }}</td>
                                         <td>
                                             <div class="dropdown">
                                                 <button class="btn dropdown-toggle hide-arrow p-0"
                                                     data-bs-toggle="dropdown" type="button">
                                                     <i class="bx bx-dots-vertical-rounded"></i>
                                                 </button>
                                                 <div class="dropdown-menu">
                                                     <a class="dropdown-item"
                                                         href="{{ route('admin.category.edit', ['category_id' => $category->id]) }}"><i
                                                             class="bx bx-edit-alt me-1"></i> Edit</a>
                                                     <a class="dropdown-item"
                                                         onclick="deleteConfirmation({{ $category->id }})"
                                                         style="cursor: pointer"><i class="bx bx-trash me-1"></i>
                                                         Delete</a>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <hr>
             <span style="padding-top: 20px">
                 {!! $categories->withQueryString()->links('pagination::bootstrap-5') !!}
             </span>
             <!--/ Bordered Table -->

             <hr class="my-5" />


         </div>
         <!-- / Content -->

         <div class="content-backdrop fade"></div>
     </div>
     <!-- Content wrapper -->

 </div>

 <div class="modal" id="deleteConfirmation">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body pb-30 pt-30">
                 <div class="col-md-12 text-center">
                     <h4 class="pb-3">Do you want to delete this record?</h4>
                     <button class="btn btn-secondary" data-bs-target="#deleteConfirmation" data-bs-toggle="modal"
                         type="button">Cancel</button>
                     <button class="btn btn-danger" onclick="deleteCategory()" type="button">Delete</button>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <script>
     function deleteConfirmation(id) {
         @this.set('category_id', id);
         $('#deleteConfirmation').modal('show');
     }

     function deleteCategory() {
         @this.call('deleteCategory');
         $('#deleteConfirmation').modal('hide');

     }
 </script>
