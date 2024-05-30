
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
                        <li>Orders</li>
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
                                        <th>address</th>
                                        <th class="price">City</th>
                                        <th class="quantity">Total Price</th>
                                        <th>Payment Status</th>
                                        <th>Delivery Status</th>
                                        <th>Cancel Order</th>
                                        <th>Delete Row</th>
                                        {{-- <th>PDF receipt</th> --}}
                                        <th>Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($orders) > 0)
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td class="price">
                                            {{ $order->address }}
                                        </td>
                                        <td class="price">
                                            {{ $order->city }}
                                        </td>
                                        <td class="price"> {{ $order->total_price }}FCFA</td>
                                        <td class="price"> {{ $order->payment_status }}</td>
                                        @if ($order->delivery_status == 'cancelled')
                                        <td class="price text-danger">{{ $order->delivery_status }}</td>
                                        @elseif ($order->delivery_status == 'pending')
                                        <td class="price text-warning">{{ $order->delivery_status }}</td>
                                        @else
                                        <td class="price text-success">{{ $order->delivery_status }}</td>
                                        @endif
                                        <td class="sub-total"><a onclick="deleteConfirmationCancel({{ $order->id }})" class="text-danger"><i class="fa-regular fa-rectangle-xmark"></i></a></td>
                                        <td class="sub-total"><a onclick="deleteConfirmation({{ $order->id }})" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                                        {{-- <td class="sub-total">pdf</td> --}}
                                        <td class="price"><a href={{ route('user.report' , ['order_id' => $order->id] )}}>Details</a></td>
                                        {{-- <td class="detail-qty">
                                            <div class="container">
                                                <a href="#" wire:click.prevent=""><i class="fa-solid fa-minus"></i></a>
                                                <span class="qty-val">{{ $item->qty }}</span>
                                                <a href="#" wire:click.prevent=""><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td>No Report</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <span style="padding-top: 20px">
                    {!!$orders->withQueryString()->links('pagination::bootstrap-5')!!}
                  </span>
                  <!--/ Bordered Table -->

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
