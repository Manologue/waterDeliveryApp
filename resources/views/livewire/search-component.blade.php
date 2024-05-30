<div>

    <!-- Page Title -->
    <section class="page-title centred"
        style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});">
        <div class="shape" style="background-image: url({{ asset('assets/images/shape/banner-shap.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Search</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- shop-page-section -->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="shop-sidebar default-sidebar">
                        {{-- <div class="sidebar-widget sidebar-search">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-inner">
                                <form action="shop.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="sidebar-widget sidebar-category">
                            <div class="widget-title">
                                <h3>Sorting</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#" wire:click.prevent="changeOrderBy('Default Sorting')"><i
                                                class="far fa-long-arrow-right"></i>Default Sorting</a></li>
                                    <li><a href="#" wire:click.prevent="changeOrderBy('Liter: Low to High')"><i
                                                class="far fa-long-arrow-right"></i>Liter: Low to High</a></li>
                                    <li><a href="#" wire:click.prevent="changeOrderBy('Liter: High to Low')"><i
                                                class="far fa-long-arrow-right"></i>Liter: High to Low</a></li>
                                    <li><a href="#" wire:click.prevent="changeOrderBy('Sort By Newness')"><i
                                                class="far fa-long-arrow-right"></i>Sort By Newness</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-category">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ($categories as $category)
                                    <li><a href="{{ route('product.category', ['slug' => $category->slug]) }}"><i
                                                class="far fa-long-arrow-right"></i>{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="sidebar-widget price-filter">
                            <div class="widget-title">
                                <h3>Filter by Price</h3>
                            </div>
                            <div class="range-slider clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <button class="filter-btn">Filter</button>
                                    </div>
                                    <div class="pull-right">
                                        <p>Price:</p>
                                        <div class="title"></div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name"
                                                readonly=""></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="our-shop">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left clearfix">
                                {{ count($products) }} Results</p>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        @foreach ($products as $product)
                        <div class="col-lg-6 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500m">
                                <div class="inner-box">
                                    <figure class="image-box"><img alt="{{ $product->name }}"
                                            src="{{ asset('assets/img') }}/{{ $product->image }}"></figure>
                                    <div class="lower-content">
                                        <div class="shape"
                                            style="background-image: url({{ asset('assets/images/shape/shape-7.png') }})">
                                        </div>
                                        <span>{{ $product->quantity }} Liter</span>
                                        <h4><a href="{{ route('product.details', ['slug' => $product->slug]) }}">{{
                                                $product->name }}</a>
                                        </h4>
                                        <h6>{{ $product->price }}FCFA</h6>
                                        <p>{{ $product->short_description }}</p>
                                        <div class="btn-box">
                                            <a class="theme-btn btn-two" href="#"
                                                wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})">Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <span style="padding-top: 20px">
                        {{ $products->links('livewire::bootstrap') }}
                    </span>
                </div>
            </div>
        </div>
</div>
</section>
<!-- shop-page-section end -->
</div>