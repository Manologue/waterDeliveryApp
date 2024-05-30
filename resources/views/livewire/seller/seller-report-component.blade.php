<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
       <!-- Content -->

       <div class="container-xxl flex-grow-1 container-p-y">
           <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> Reports</h4>

           <a style="margin-bottom: 10px;" class="btn btn-primary" href="{{ route('seller.orders') }}">Orders</a>
         <!-- Bordered Table -->
         <div class="card">
           <h5 class="card-header">Bordered Table</h5>
           <div class="card-body">
             <div class="table-responsive text-nowrap">
               @if (Session::has('message'))
               <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
               @endif
               @if (Session::has('failure'))
               <div class="alert alert-danger" role="alert">{{ Session::get('failure') }}</div>
               @endif
               <table class="table table-bordered">
                 <thead>
                   <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                   </tr>
                 </thead>
                 <tbody>
                   {{-- @php
                       $i = ($products->currentPage()-1)*$products->perPage();
                   @endphp --}}
                  {{-- @for ($i = 0; $i < count($reports); $i++) --}}
                   @foreach ( $reports as $report)
                   <tr>
                    <td>
                        {{ $report->product_name }}
                    </td>
                    <td>
                        <img width="100px" src="{{asset('assets/img')}}/{{  $report->product_image }}" alt="">
                    </td>
                    <td> {{ $report->product_price }}FCFA</td>
                    <td>
                        {{ $report->product_quantity }}
                    </td>
                   </tr>
                   @endforeach
                   {{-- @endfor --}}
                 </tbody>
               </table>
           </div>
           </div>
         </div>
         <hr>
         <span style="padding-top: 20px">
           {{-- {!!$report->withQueryString()->links('pagination::bootstrap-5')!!} --}}
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
   </div> --}}
{{--

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
