<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold mb-4 py-3"><span class="text-muted fw-light">Table /</span> Reports</h4>

            <a class="btn btn-primary" href="{{ route('admin.orders') }}" style="margin-bottom: 10px;">Orders</a>
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
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Product Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @php
                       $i = ($products->currentPage()-1)*$products->perPage();
                   @endphp --}}
                                {{-- @for ($i = 0; $i < count($reports); $i++) --}}
                                @foreach ($reports as $report)
                                    <tr>
                                        <td>
                                            {{ $report->product_name }}
                                        </td>
                                        <td>
                                            <img alt=""
                                                src="{{ asset('assets/img') }}/{{ $report->product_image }}"
                                                width="100px">
                                        </td>
                                        <td> {{ $report->product_price }}FCFA</td>
                                        <td>
                                            {{ $report->product_quantity }}
                                        </td>
                                        <td>
                                            {{ $report->product->user->name }}
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
