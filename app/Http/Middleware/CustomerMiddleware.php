<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('customer')->check() && auth('customer')->user()->is_active) {
            return $next($request);
<<<<<<< HEAD
        } elseif (Auth::guard('customer')->check()) {
            auth()->guard('customer')->logout();
            Toastr::warning(translate('the_account_is_suspended'));
        } else {
            Toastr::info(translate('login_first_for_next_steps'));
        }
=======
        }elseif (Auth::guard('customer')->check()){
            auth()->guard('customer')->logout();
        }
        Toastr::info(translate('login_first_for_next_steps'));
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        return redirect()->route('customer.auth.login');
    }
}
