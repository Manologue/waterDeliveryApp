<li class="cart-box">
    <a href="{{ route('shop.cart') }}"><i class="fal fa-shopping-cart"></i>
        @if (Cart::count() > 0)
        <span>{{ Cart::count() }}</span>
        @endif
    </a>
</li>
