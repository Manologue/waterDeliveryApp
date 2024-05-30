<div>
    <style>
        .sub-total {
            cursor: pointer;
        }
    </style>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Table /</span> Orders</h4>

            {{-- <a style="margin-bottom: 10px;" class="btn btn-primary" href="{{ route('admin.orders') }}">Orders</a> --}}
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
                        <table class="table-bordered table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>company name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>note</th>
                                    <th>userId</th>
                                    <th>total price</th>
                                    <th>payment status</th>
                                    <th>delivery status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @php
                       $i = ($products->currentPage()-1)*$products->perPage();
                   @endphp --}}

                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td><a
                                                href="{{ route('admin.report', ['order_id' => $order->id]) }}">Details</a>
                                        </td>
                                        <td class="sub-total"><a class="text-danger"
                                                onclick="deleteConfirmation({{ $order->id }})"><i
                                                    class="fa-solid fa-trash"></i></a></td>
                                        <td>{{ $order->first_name }}</td>
                                        <td>{{ $order->last_name }}</td>
                                        <td>{{ $order->company_name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->note }}</td>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        @if ($order->delivery_status == 'cancelled')
                                            <td class="text-danger">{{ $order->delivery_status }}</td>
                                        @elseif ($order->delivery_status == 'pending')
                                            <td class="text-warning">{{ $order->delivery_status }}</td>
                                        @else
                                            <td class="text-success">{{ $order->delivery_status }}</td>
                                        @endif
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <span style="padding-top: 20px">
                {{-- {!!$orders->withQueryString()->links('pagination::bootstrap-5')!!} --}}
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
                        onclick="closeModal()" type="button">Cancel</button>
                    <button class="btn btn-danger" onclick="deleteOrder()" type="button">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function deleteConfirmation(id) {
        @this.set('order_id', id);
        $('#deleteConfirmation').modal('show');
    }

    function deleteOrder() {
        @this.call('deleteOrder');
        $('#deleteConfirmation').modal('hide');

    }

    function closeModal() {
        $('#deleteConfirmation').modal('hide');

    }
</script>
