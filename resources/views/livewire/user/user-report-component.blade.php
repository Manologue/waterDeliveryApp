
<div>
    <style>
       .detail-qty .container i{
          color: #848484;
       }
       .detail-qty .container{
        display: flex;
         justify-content: space-between;
         text-align: center;
         border: 1px solid rgb(241, 234, 234);
         /* margin-bottom: 2rem; */
         border-radius: 2rem;
         padding: 0.5rem 0.7rem;
         font-size: 1rem;
       }
       .sub-total {
        cursor: pointer;
       }



        </style>
<!-- Page Title -->
        <section class="page-title centred" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});">
            <div class="shape" style="background-image: url({{ asset('assets/images/shape/banner-shap.png') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Dashboard Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">User</a></li>
                        <li>Report</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- cart section -->
        <section class="cart-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                        <div class="table-outer">
                            @if (Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success | {{ Session::get('success_message') }}</strong>
                                </div>
                            @endif
                            @if (Session::has('failure'))
                                <div class="alert alert-danger">
                                    <strong>Failed | {{ Session::get('failure') }}</strong>
                                </div>
                            @endif

                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th>Product Name</th>
                                        <th class="price">Product Image</th>
                                        <th class="quantity">Product Price</th>
                                        <th>Product Quantity</th>
                                        <th>Product Company</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($reports as $report)
                                    <tr>
                                        <td class="price">
                                            {{ $report->product_name }}
                                        </td>
                                        <td class="price">
                                            <img width="100px" src="{{asset('assets/img')}}/{{  $report->product_image }}" alt="">
                                        </td>
                                        <td class="price"> {{ $report->product_price }}FCFA</td>
                                        <td class="price">
                                            {{ $report->product_quantity }}
                                        </td>
                                        <td class="price">
                                            {{ $report->product->user->name }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- cart section end -->
</div>




  <div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                    <h4 class="pb-3">Do you want to delete this record?</h4>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="deleteOrder()">Delete</button>
                    </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="deleteConfirmationCancel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                    <h4 class="pb-3">Do you want to cancel this order?</h4>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmationCancel">Exit</button>
                    <button type="button" class="btn btn-danger" onclick="cancelOrder()">cancel order</button>
                    </div>
            </div>
        </div>
    </div>
</div>


  <script>
    function deleteConfirmation(id){
       @this.set('order_id',id);
       $('#deleteConfirmation').modal('show');
    }
    function deleteOrder() {
      @this.call('deleteOrder');
      $('#deleteConfirmation').modal('hide');

    }

    function deleteConfirmationCancel(id){
       @this.set('order_id',id);
       $('#deleteConfirmationCancel').modal('show');
    }
    function cancelOrder() {
      @this.call('cancelOrder');
      $('#deleteConfirmationCancel').modal('hide');

    }
   </script>
