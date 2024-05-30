<div>
<!-- banner-section -->
<section class="banner-section">
    <div class="shape" style="background-image: url(assets/images/shape/banner-shap.png);"></div>
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
        <div class="slide-item">
            <div class="pattern-box">
                <div class="pattern-1"></div>
                <div class="pattern-2"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{  asset('assets/img/vector-1.png') }}" alt=""></figure>
                        <figure class="image image-2"><img src="{{  asset('assets/img/vector-1.png') }}" alt=""></figure>
                    </div>
                    <div class="content-box">
                        <h2>Always Want Safe and Good Water for Healthy Life</h2>
                        <p>Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit.</p>
                        <div class="btn-box clearfix">
                            <a href="{{ route('shop') }}" class="theme-btn btn-one">Our Services</a>
                            {{-- <a href="service.html" class="theme-btn banner-btn">Discover</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
<!-- feature-section -->
<section class="feature-section centred">
    <div class="auto-container">
        <div class="inner-container wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="title-text">
                <h2>A Trusted Name In <br />Bottled Water Industry</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-water-drop"></i></div>
                            <h4>Maxium Purity</h4>
                            <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-water-drop-1"></i></div>
                            <h4>Cholorine Free</h4>
                            <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                            <div class="icon-box"><i class="flaticon-recycle"></i></div>
                            <h4>5 Steps Filtration</h4>
                            <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-glass"></i></div>
                            <h4>Healthy Water</h4>
                            <p>Lorem ipsum dolor sit amet adipelit sed eiusmte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->

<!-- shop-section -->
<section class="shop-section centred">
    <div class="auto-container">
        <div class="sec-title">
            <h2>We Deliver Best Quality <br />Bottle Packs.</h2>
        </div>
        <div class="row clearfix">
            @foreach ( $categories as $category )
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 shop-block">
                <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('assets/img') }}/{{ $category->image }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                            <h4><a href="{{ route('product.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- shop-section end -->


<!-- about-section -->
{{-- <section class="about-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <figure class="image-box clearfix wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/resource/about-1.png" alt=""></figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h2>We Always Want Safe and Healthy Water for Healthy Life.</h2>
                        </div>
                        <div class="text">
                            <p>Dolor sit amet consectur elit sed eiusmod tempor incid dunt labore  dolore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex comodo consequat.duis aute irure dolor in reprehenderit. in voluptate velit esse cillum dolore eu fugiat.</p>
                            <p>Cepteur sint occaecat cupidatat non proident sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        </div>
                        <div class="btn-box">
                            <a href="about.html" class="theme-btn btn-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- about-section end -->


<!-- service-section -->
{{-- <section class="service-section bg-color-1">
    <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
    <figure class="image-layer"><img src="assets/images/resource/service-1.png" alt=""></figure>
    <div class="bg-shape">
        <div class="bg-shape-1"></div>
        <div class="bg-shape-2"></div>
        <div class="bg-shape-3"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Protect Your Family with Best Water <br />Filtering System Services</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                <div class="left-column text-right">
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-water-bottle-1"></i></div>
                            <h4><a href="service-details-2.html">Residential Waters</a></h4>
                            <p>Lorem ipsum dolor sit amet adilit sed eiusmte mpor.</p>
                        </div>
                    </div>
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-water"></i></div>
                            <h4><a href="service-details-4.html">Filtration Plants</a></h4>
                            <p>Lorem ipsum dolor sit amet adilit sed eiusmte mpor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                <div class="right-column text-left">
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-water-bottle"></i></div>
                            <h4><a href="service-details-3.html">Commercial Waters</a></h4>
                            <p>Lorem ipsum dolor sit amet adilit sed eiusmte mpor.</p>
                        </div>
                    </div>
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-water-drop-1"></i></div>
                            <h4><a href="service-details-5.html">Water Softening</a></h4>
                            <p>Lorem ipsum dolor sit amet adilit sed eiusmte mpor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- service-section end -->


<!-- chooseus-section -->
{{-- <section class="chooseus-section">
    <div class="bg-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="shape-layer">
        <div class="shape-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
        <div class="shape-4" style="background-image: url(assets/images/shape/shape-32.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_2">
                    <div class="content-box">
                        <div class="sec-title light">
                            <h2>Protect Your Family with One of The Best Water Filtering System.</h2>
                        </div>
                        <div class="inner-box">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-draw-check-mark"></i></div>
                                <div class="text">
                                    <h4>Content Marketing</h4>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt labore.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-draw-check-mark"></i></div>
                                <div class="text">
                                    <h4>Marketing Strategy</h4>
                                    <p>Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <figure class="image"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- chooseus-section end -->
</div>
