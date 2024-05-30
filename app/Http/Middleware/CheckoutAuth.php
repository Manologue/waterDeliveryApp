<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutAuth {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::user()) {
            if (Auth::user()->utype == 'ADM') {

                Auth::logout();
                session()->flash('failure', 'Admin cannot order a product please login as a customer or simply logout!');

                // dd(session());
                return redirect()->route('login');
            }
            if (Auth::user()->utype == 'SEL') {

                Auth::logout();
                session()->flash('failure', 'you cannot order with your seller account please login as a customer or simply logout!');

                // dd(session());
                return redirect()->route('login');
            }
            if (Auth::user()->suspended == 1) {

                Auth::logout();
                session()->flash('failure', 'you cannot order your account has been suspended');

                // dd(session());
                return redirect()->route('login');
            }
        }
        if (Cart::count() < 1) {
            session()->flash('failure', 'your cart is empty please add atleast one item!');

            return redirect()->route('shop.cart');
        }
        return $next($request);
    }
}
