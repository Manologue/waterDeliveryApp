<div>
    <!-- Page Title -->
    <section class="page-title centred"
        style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});">
        <div class="shape" style="background-image: url({{ asset('assets/images/shape/banner-shap.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Checkout</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- checkout-section -->
    <section class="checkout-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 upper-column">
                    <div class="upper-box">
                        @if (!Auth::user())
                            <div class="customer single-box">Returning Customer? <a href="{{ route('login') }}">Click
                                    here
                                    to Login</a></div>
                            {{-- <div class="coupon single-box">Have a Coupon? <a href="checkbox.html">Click here to enter
                                your code</a></div> --}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                    <div class="inner-box">
                        <div class="billing-info">
                            <h4 class="sub-title">Billing Details</h4>
                            <form action="#" class="billing-form" method="post">
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>First Name*</label>
                                        <div class="field-input">
                                            <input name="first_name" type="text" wire:model="first_name">
                                        </div>
                                        @error('first_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Last Name*</label>
                                        <div class="field-input">
                                            <input name="last_name" type="text" wire:model="last_name">
                                        </div>
                                        @error('last_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Company Name*</label>
                                        <div class="field-input">
                                            <input name="company_name" type="text" wire:model="company_name">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Email Address*</label>
                                        <div class="field-input">
                                            <input name="email" type="email" wire:model="email">
                                        </div>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Phone Number*</label>
                                        <div class="field-input">
                                            <input name="phone" type="text" value="" wire:model="phone">
                                        </div>
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Address/quarter*</label>
                                        <div class="field-input">
                                            <input class="address" name="address" type="text" wire:model="address">
                                            {{-- <input type="text" name="address"> --}}
                                        </div>
                                        @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="city">Town/City*</label>
                                        <div class="select-column select-box">
                                            <select class="selectmenu" id="ui-id-2" wire:model="city">
                                                <option>Select City</option>
                                                <option value="yaounde">Yaounde</option>
                                                <option value="douala">Douala</option>
                                            </select>
                                        </div>
                                        @error('city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="additional-info">
                            <div class="note-book">
                                <label>Order Notes</label>
                                <textarea name="note" placeholder="Notes about your order, e.g. special notes for your delivery" wire:model="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                    <div class="inner-box">
                        <div class="order-info">
                            <h4 class="sub-title">Your Order</h4>
                            <div class="order-product">
                                <ul class="order-list clearfix">
                                    <li class="title clearfix">
                                        <p>Product</p>
                                        <span>Total</span>
                                    </li>
                                    @if (Cart::count() > 0)
                                        @foreach (Cart::content() as $item)
                                            <li>
                                                <div class="single-box clearfix">
                                                    <img alt=""
                                                        src="{{ asset('assets/img') }}/{{ $item->model->image }}">
                                                    <h6>{{ $item->model->name }} x {{ $item->qty }}</h6>
                                                    <span>{{ $item->model->price }}FCFA</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                    <li class="sub-total clearfix">
                                        <h6>Sub Total</h6>
                                        <span>{{ Cart::subtotal() }}FCFA</span>
                                    </li>
                                    <li class="order-total clearfix">
                                        <h6>Order Total</h6>
                                        <span>{{ Cart::total() }}FCFA</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-info">
                            <h4 class="sub-title">Payment Proccess</h4>
                            <div class="payment-inner">
                                {{-- <div class="option-block">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">Direct bank transfer</span>
                                        </label>
                                    </div>
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.</p>
                                </div>
                                <div class="option-block">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">Paypal<a href="checkout.html">What is
                                                    paypal?</a></span>
                                        </label>
                                    </div>
                                </div> --}}

                                <div class="btn-box">
                                    <a class="theme-btn btn-one" href="#" wire:click.prevent="cash_order">Cash on
                                        delivery</a>
                                </div>
                                <br>
                                {{-- <div class="btn-box">
                                    <a href="#" wire:click.prevent="stripe_order" class="theme-btn btn-one">Pay using
                                        card</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-section end -->

</div>

{{-- @push('scripts') --}}

{{-- <script>
    function city_on_change(value){
    @this.set('city',value);
    //  this.value = value;
  }
</script> --}}
{{-- @endpush --}}
