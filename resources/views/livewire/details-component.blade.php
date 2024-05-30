<div>
   <style>
   .detail-qty{
    /* background: red; */
    width: 30%;
    max-width: 100px;
    display: flex;
    justify-content: space-between;
    border: 1px solid rgb(241, 234, 234);
    margin-bottom: 2rem;
    border-radius: 2rem;
    padding: 0.5rem 0.7rem;
    font-size: 1rem;
   }
  .detail-qty i{
     color: #848484;
  }


   </style>
   <!-- Page Title -->
   <section
   class="page-title centred"
   style="background-image: url({{ asset('assets/images/background/page-title.jpg') }})"
 >
   <div
     class="shape"
     style="background-image: url({{ asset('assets/images/shape/banner-shap.png') }})"
   ></div>
   <div class="auto-container">
     <div class="content-box">
       <h1>Shop Details</h1>
       <ul class="bread-crumb clearfix">
         <li><a href="index.html">Home</a></li>
         <li>Shop Details</li>
       </ul>
     </div>
   </div>
 </section>
 <!-- End Page Title -->

 <!-- shop-details -->
 <section class="shop-details">
   <div class="auto-container">
     <div class="product-details-content">
        @if (Session::has('failed'))
        <div class="alert alert-danger">
            <strong>Failed | {{ Session::get('failed') }}</strong>
        </div>
       @endif
       <div
         class="shape"
         style="background-image: url({{ asset('assets/images/shape/shape-39.png') }})"
       ></div>
       <div class="row clearfix">
         <div class="col-lg-6 col-md-12 col-sm-12 image-column">
           <div class="image-box">
             <figure class="image">
               <img src="{{asset('assets/img')}}/{{ $product->image }}" alt="" />
             </figure>
             <div class="preview-link">
               <a
                 href="{{asset('assets/img')}}/{{ $product->image }}"
                 class="lightbox-image"
                 data-fancybox="gallery"
                 ><i class="far fa-search-plus"></i
               ></a>
             </div>
           </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12 content-column">
           <div class="product-details">
             <h3>{{ $product->name }}</h3>
             <div class="customer-rating clearfix">
               <ul class="rating pull-left">
                 <li><i class="fas fa-star"></i></li>
                 <li><i class="fas fa-star"></i></li>
                 <li><i class="fas fa-star"></i></li>
                 <li><i class="fas fa-star"></i></li>
                 <li><i class="fas fa-star"></i></li>
               </ul>
               <div class="review pull-left">
                 <a href="shop-details.html">( {{ count($comments) }} Reviews )</a>
               </div>
             </div>
             <h5>{{ $product->price }} FCFA</h5>
             <div class="text">
               <p>
                {{ $product->description }}
               </p>
             </div>
             <div class="addto-cart-box">
               <ul class="clearfix">
                <div class="detail-qty">
                    <a href="#" wire:click.prevent="decreaseQuantity" class="qty-down"><i class="fa-solid fa-minus"></i></a>
                    <span class="qty-val">{{ $value_quantity }}</span>
                    <a href="#" wire:click.prevent="increaseQuantity" class="qty-up"><i class="fa-solid fa-plus"></i></a>
                </div>
                 <li>
                   <button wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})" type="button" class="theme-btn btn-one">
                     Add To Cart
                   </button>
                 </li>
               </ul>
             </div>
             <div class="other-option">
               <ul class="list">
                 <li>SKU: {{ $product->SKU }}</li>
                 {{-- <li>05</li> --}}
               </ul>
               <ul class="category list">
                 <li>Category:</li>
                 <li>{{ $product->category->name }}</li>
               </ul>
               {{-- <ul class="tags list">
                 <li>Tags:</li>
                 <li>glasses,</li>
                 <li>water,</li>
                 <li>bottle</li>
               </ul> --}}
               {{-- <ul class="social-links clearfix">
                 <li><h6>Follow Us:</h6></li>
                 <li>
                   <a href="shop-details.html"><i class="fab fa-facebook-f"></i></a>
                 </li>
                 <li>
                   <a href="shop-details.html"><i class="fab fa-twitter"></i></a>
                 </li>
                 <li>
                   <a href="shop-details.html"><i class="fab fa-vimeo-v"></i></a>
                 </li>
                 <li>
                   <a href="shop-details.html"
                     ><i class="fab fa-google-plus-g"></i
                   ></a>
                 </li>
               </ul> --}}
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="product-discription">
       <div
         class="shape"
         style="background-image: url({{ asset('assets/images/shape/shape-39.png') }})"
       ></div>
       <div class="tabs-box">
         <div class="tab-btn-box">
           <ul class="tab-btns tab-buttons clearfix">
             {{-- <li class="tab-btn active-btn" data-tab="#tab-1">Description</li> --}}
             <li class="tab-btn" data-tab="#tab-2">Reviews ({{ count($comments) }})</li>
           </ul>
         </div>
         <div class="tabs-content">
           {{-- <div class="tab" id="tab-1">
             <div class="content-box">
               <p>
                {{ $product->description }}
               </p>
             </div>
           </div> --}}
           <div class="tab active-tab" id="tab-2">
             <div class="row clearfix">
               <div class="col-lg-6 col-md-6 col-sm-12 review-block">
                 <div class="customer-review">
                   <h4>Reviews</h4>
                   @if (count($comments) > 0)
                   @foreach ($comments as $comment)
                   <div class="single-review">
                     <div class="inner">
                       <h5>{{ $comment->user->name }}<span> - {{ date('d-m-Y', strtotime($comment->created_at)) }}</span></h5>
                       <p>
                        {{ $comment->comment }}
                       </p>
                     </div>
                   </div>
                   @endforeach
                   @else
                   <div class="single-review">
                    <div class="inner">
                    <p> be the first to leave a comment</p>
                    </div>
                  </div>
                   @endif
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                 <div class="customer-comments">
                   @auth
                   @if (Auth::user()->utype == 'USR' && Auth::user()->suspended == 0)
                   <form
                    wire:submit.prevent="addComment"
                    class="comment-form"

                   >
                     <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                         <label>Your Comment</label>
                         <textarea name="comment" wire:model="comment"></textarea>
                         @error('comment')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                       </div>
                       {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                         <label>Your Name</label>
                         <input type="text" name="name" required="" />
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                         <label>Your Email</label>
                         <input type="email" name="email" required="" />
                       </div> --}}
                       <div
                         class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"
                       >
                         <button type="submit" class="theme-btn btn-one">
                           Submit Now
                         </button>
                       </div>
                     </div>
                   </form>
                   @elseif(Auth::user()->suspended == 1)
                   <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <p>Your account has been suspended by the administrator you can't leave a comment</p>
                    </div>
                    </div>
                   @else
                   <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <p>Login as a customer to leave a comment</p>
                    </div>
                    <div
                      class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"
                    >
                      <a href="{{ route('login') }}" class="theme-btn btn-one">
                        Login
                      </a>
                    </div>
                    </div>
                   @endif
                   @else
                   <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <p>Login as a customer to leave a comment</p>
                    </div>
                    <div
                      class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"
                    >
                      <a href="{{ route('login') }}" class="theme-btn btn-one">
                        Login
                      </a>
                    </div>
                    </div>
                   @endauth
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="related-product">
       <div class="title-box">
         <h3>Related Products</h3>
       </div>
       <div class="row clearfix">
        @foreach ( $rproducts as $rproduct)
         <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
           <div
             class="shop-block-one wow fadeInUp animated"
             data-wow-delay="00ms"
             data-wow-duration="1500m"
           >
             <div class="inner-box">
               <figure class="image-box">
                 <img src="{{asset('assets/img')}}/{{ $rproduct->image }}" alt="" />
               </figure>
               <div class="lower-content">
                 <div
                   class="shape"
                   style="background-image: url({{ asset('assets/images/shape/shape-7.png') }})"
                 ></div>
                 <span>{{ $rproduct->quantity }} Liter</span>
                 <h4><a href="{{ route('product.details', ['slug' => $rproduct->slug ]) }}">{{ $rproduct->name }}</a></h4>
                 <h6>{{ $rproduct->price }}FCFA</h6>
                 <p>
                    {{ $rproduct->short_description }}
                 </p>
                 <div class="btn-box">
                   <a wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})" href="#" class="theme-btn btn-two"
                     >Add to cart</a
                   >
                 </div>
               </div>
             </div>
           </div>
         </div>
         @endforeach
       </div>
     </div>
   </div>
 </section>
 <!-- shop-details end -->
</div>

