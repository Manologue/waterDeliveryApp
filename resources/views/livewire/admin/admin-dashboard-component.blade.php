<div>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-8 order-0 mb-4">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                    <p class="mb-4">
                                        You have done <span class="fw-bold">72%</span> more sales today. Check your new
                                        badge in
                                        your profile.
                                    </p>

                                    <a class="btn btn-sm btn-outline-primary" href="javascript:;">View Badges</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-sm-left text-center">
                                <div class="card-body px-md-4 px-0 pb-0">
                                    <img alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png') }}"
                                        data-app-light-img="illustrations/man-with-laptop-light.png') }}" height="140"
                                        src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img alt="chart success" class="rounded"
                                                src="{{ asset('admin/assets/img/icons/unicons/chart-success.png') }}" />
                                        </div>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                                data-bs-toggle="dropdown" id="cardOpt3" type="button">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div aria-labelledby="cardOpt3" class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Profit</span>
                                    <h3 class="card-title mb-2">$12,628</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +72.80%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img alt="Credit Card" class="rounded"
                                                src="{{ asset('admin/assets/img/icons/unicons/wallet-info.png') }}" />
                                        </div>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                                data-bs-toggle="dropdown" id="cardOpt6" type="button">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div aria-labelledby="cardOpt6" class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Sales</span>
                                    <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +28.42%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-md-3 order-lg-2 order-2 mb-4">
                    <div class="card">
                        <div class="row row-bordered g-0">
                            <div class="col-md-8">
                                <h5 class="card-header me-2 m-0 pb-3">Total Revenue</h5>
                                <div class="px-2" id="totalRevenueChart"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" id="growthReportId" type="button">
                                                2022
                                            </button>
                                            <div aria-labelledby="growthReportId"
                                                class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                                <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="growthChart"></div>
                                <div class="fw-semibold mb-2 pt-3 text-center">62% Company Growth</div>

                                <div
                                    class="d-flex px-xxl-4 px-lg-2 gap-xxl-3 gap-lg-1 justify-content-between gap-3 p-4">
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-primary p-2"><i
                                                    class="bx bx-dollar text-primary"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2022</small>
                                            <h6 class="mb-0">$32.5k</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <span class="badge bg-label-info p-2"><i
                                                    class="bx bx-wallet text-info"></i></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <small>2021</small>
                                            <h6 class="mb-0">$41.2k</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-md-2 order-3">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img alt="Credit Card" class="rounded"
                                                src="{{ asset('admin/assets/img/icons/unicons/paypal.png') }}" />
                                        </div>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                                data-bs-toggle="dropdown" id="cardOpt4" type="button">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div aria-labelledby="cardOpt4" class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Payments</span>
                                    <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                        -14.82%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img alt="Credit Card" class="rounded"
                                                src="{{ asset('admin/assets/img/icons/unicons/cc-primary.png') }}" />
                                        </div>
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                                data-bs-toggle="dropdown" id="cardOpt1" type="button">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div aria-labelledby="cardOpt1" class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Transactions</span>
                                    <h3 class="card-title mb-2">$14,857</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +28.14%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                        <div
                                            class="d-flex flex-sm-column align-items-start justify-content-between flex-row">
                                            <div class="card-title">
                                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                            </div>
                                            <div class="mt-sm-auto">
                                                <small class="text-success text-nowrap fw-semibold"><i
                                                        class="bx bx-chevron-up"></i> 68.2%</small>
                                                <h3 class="mb-0">$84,686k</h3>
                                            </div>
                                        </div>
                                        <div id="profileReportChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                                <h5 class="me-2 m-0">Order Statistics</h5>
                                <small class="text-muted">42.82k Total Sales</small>
                            </div>
                            <div class="dropdown">
                                <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                    data-bs-toggle="dropdown" id="orederStatistics" type="button">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div aria-labelledby="orederStatistics" class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column align-items-center gap-1">
                                    <h2 class="mb-2">8,258</h2>
                                    <span>Total Orders</span>
                                </div>
                                <div id="orderStatisticsChart"></div>
                            </div>
                            <ul class="m-0 p-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <span class="avatar-initial bg-label-primary rounded"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Electronic</h6>
                                            <small class="text-muted">Mobile, Earbuds, TV</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">82.5k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <span class="avatar-initial bg-label-success rounded"><i
                                                class="bx bx-closet"></i></span>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Fashion</h6>
                                            <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">23.8k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <span class="avatar-initial bg-label-info rounded"><i
                                                class="bx bx-home-alt"></i></span>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Decor</h6>
                                            <small class="text-muted">Fine Art, Dining</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">849k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <span class="avatar-initial bg-label-secondary rounded"><i
                                                class="bx bx-football"></i></span>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Sports</h6>
                                            <small class="text-muted">Football, Cricket Kit</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">99</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <button aria-controls="navs-tabs-line-card-income" aria-selected="true"
                                        class="nav-link active" data-bs-target="#navs-tabs-line-card-income"
                                        data-bs-toggle="tab" role="tab" type="button">
                                        Income
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" role="tab" type="button">Expenses</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" role="tab" type="button">Profit</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body px-0">
                            <div class="tab-content p-0">
                                <div class="tab-pane fade show active" id="navs-tabs-line-card-income"
                                    role="tabpanel">
                                    <div class="d-flex p-4 pt-3">
                                        <div class="avatar me-3 flex-shrink-0">
                                            <img alt="User"
                                                src="{{ asset('admin/assets/img/icons/unicons/wallet.png') }}" />
                                        </div>
                                        <div>
                                            <small class="text-muted d-block">Total Balance</small>
                                            <div class="d-flex align-items-center">
                                                <h6 class="me-1 mb-0">$459.10</h6>
                                                <small class="text-success fw-semibold">
                                                    <i class="bx bx-chevron-up"></i>
                                                    42.9%
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="incomeChart"></div>
                                    <div class="d-flex justify-content-center gap-2 pt-4">
                                        <div class="flex-shrink-0">
                                            <div id="expensesOfWeek"></div>
                                        </div>
                                        <div>
                                            <p class="mb-n1 mt-1">Expenses This Week</p>
                                            <small class="text-muted">$39 less than last week</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title me-2 m-0">Transactions</h5>
                            <div class="dropdown">
                                <button aria-expanded="false" aria-haspopup="true" class="btn p-0"
                                    data-bs-toggle="dropdown" id="transactionID" type="button">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div aria-labelledby="transactionID" class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="m-0 p-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/paypal.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Paypal</small>
                                            <h6 class="mb-0">Send money</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+82.6</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/wallet.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Wallet</small>
                                            <h6 class="mb-0">Mac'D</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+270.69</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/chart.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Transfer</small>
                                            <h6 class="mb-0">Refund</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+637.91</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/cc-success.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Credit Card</small>
                                            <h6 class="mb-0">Ordered Food</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">-838.71</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/wallet.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Wallet</small>
                                            <h6 class="mb-0">Starbucks</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+203.33</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar me-3 flex-shrink-0">
                                        <img alt="User" class="rounded"
                                            src="{{ asset('admin/assets/img/icons/unicons/cc-warning.png') }}" />
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Mastercard</small>
                                            <h6 class="mb-0">Ordered Food</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">-92.45</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
