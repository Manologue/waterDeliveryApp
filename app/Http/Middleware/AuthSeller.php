<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSeller {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::user()->utype === 'SEL' && Auth::user()->suspended === 0) {
            return $next($request);
        } else {
            if (Auth::user()->suspended === 1) {
                // dd(Auth::user()->suspended);
                Auth::logout();
                session()->flash('failure', 'your account has been suspended by the administrator');
                return redirect()->route('login');
            }

            session()->flush();
            return redirect()->route('login');
        }
    }
}
