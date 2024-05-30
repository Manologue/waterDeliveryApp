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


        </style>
<!-- Page Title -->
        <section class="page-title centred" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});">
            <div class="shape" style="background-image: url({{ asset('assets/images/shape/banner-shap.png') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Cart Page</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Cart Page</li>
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
                                        <th>&nbsp;</th>
                                        <th class="prod-column">Product Name</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="price">Price</th>
                                        <th class="quantity">Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (Cart::count() > 0)
                                    @foreach (Cart::content() as $item)
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div wire:click.prevent="destroy('{{ $item->rowId }}')" class="remove-btn">
                                                    <i class="fal fa-times"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <img src="{{asset('assets/img')}}/{{ $item->model->image }}" alt="">
                                                </div>
                                                <div class="prod-title">
                                                    {{ $item->model->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price"> {{ $item->model->price }}FCFA</td>
                                        <td class="detail-qty">
                                            <div class="container">
                                                <a href="#" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')" class="qty-down"><i class="fa-solid fa-minus"></i></a>
                                                <span class="qty-val">{{ $item->qty }}</span>
                                                <a href="#" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')" class="qty-up"><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </td>
                                        <td class="sub-total"> {{ $item->subtotal }}</td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr><td>No Item in Cart</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="othre-content clearfix">
                    {{-- <div class="coupon-box pull-left clearfix">
                        <input type="text" placeholder="Enter coupon code...">
                        <button type="button">Apply coupon</button>
                    </div> --}}
                    {{-- <div class="update-btn pull-right">
                        <button type="button" class="theme-btn btn-two">Update Cart</button>
                    </div> --}}
                    <div wire:click.prevent="clearAll()" class="pull-right">
                        <button type="button">clear all</button>
                    </div>
                </div>
                <div class="cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                            <div class="total-cart-box clearfix">
                                <h6>Cart Totals</h6>
                                <ul class="list clearfix">
                                    <li>Subtotal:<span>{{ Cart::subtotal() }}FCFA</span></li>
                                    <li>Tax:<span>{{ Cart::tax() }}FCFA</span></li>
                                    <li>Order Total:<span>{{ Cart::total() }}FCFA</span></li>
                                </ul>
                                @if (Auth::user())
                                    <a type="button" href="{{ route('shop.checkout') }}" class="theme-btn btn-one">Proceed to Checkout</a>
                                @else
                                    <a type="button" data-toggle="modal" data-target="#exampleModal" class="theme-btn btn-one">Proceed to Checkout</a>
                                @endif
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->
</div>


{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" class="text-danger" id="exampleModalLabel">Important</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          To have a better user experience and a track of your orders history we advice you to login if you have an account or to register if not
        </div>
        <div class="modal-footer">
          <a type="button" href="{{ route('login') }}" class="btn btn-primary">Login</a>
          <a type="button" href="{{ route('register') }}" class="btn btn-primary">Register</a>
          <a type="button" href="{{ route('shop.checkout') }}" class="btn btn-secondary">Later</a>
        </div>
      </div>
    </div>
  </div>

