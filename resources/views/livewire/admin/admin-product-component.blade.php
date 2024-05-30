<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Table /</span> Products</h4>

            {{-- <a style="margin-bottom: 10px;" class="btn btn-primary" href="{{ route('admin.product.add') }}">Add Product</a> --}}
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
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Comments</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = ($products->currentPage() - 1) * $products->perPage();
                                @endphp
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            {{ ++$i }}
                                        </td>
                                        <td>
                                            <img alt="{{ $product->name }}"
                                                src="{{ asset('assets/img') }}/{{ $product->image }}" width="100px">
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>{{ $product->user->id }}</td>
                                        <td>{{ $product->user->name }}</td>
                                        <td><a
                                                href="{{ route('admin.product.comments', ['product_id' => $product->id]) }}">Comments</a>
                                        </td>
                                        {{-- <td>
                       <div class="dropdown">
                         <button
                           type="button"
                           class="btn p-0 dropdown-toggle hide-arrow"
                           data-bs-toggle="dropdown"
                         >
                           <i class="bx bx-dots-vertical-rounded"></i>
                         </button>
                         <div class="dropdown-menu">
                           <a class="dropdown-item" href="{{ route('admin.product.edit' , ['product_id' => $product->id]) }}"
                             ><i class="bx bx-edit-alt me-1"></i> Edit</a
                           >
                           <a class="dropdown-item"  style="cursor: pointer" onclick="deleteConfirmation({{ $product->id }})"
                             ><i class="bx bx-trash me-1"></i> Delete</a
                           >
                         </div>
                       </div>
                     </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <span style="padding-top: 20px">
                {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>
            <!--/ Bordered Table -->

            <hr class="my-5" />


        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

</div>

{{-- <div class="modal" id="deleteConfirmation">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-body pb-30 pt-30">
                       <div class="col-md-12 text-center">
                       <h4 class="pb-3">Do you want to delete this record?</h4>
                       <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                       <button type="button" class="btn btn-danger" onclick="deleteProduct()">Delete</button>
                       </div>
               </div>
           </div>
       </div>
   </div>


      <script>
       function deleteConfirmation(id){
          @this.set('product_id',id);
          $('#deleteConfirmation').modal('show');
       }
       function deleteProduct() {
         @this.call('deleteProduct');
         $('#deleteConfirmation').modal('hide');

       }
      </script> --}}