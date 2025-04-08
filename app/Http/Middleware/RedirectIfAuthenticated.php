<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
                    return redirect()->route('admin.dashboard.index');
=======
                    return redirect()->route('admin.dashboard');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                }
                break;
            case 'seller':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('vendor.dashboard.index');
                }
                break;
            case 'customer':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('home');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('home');
                }
                break;
        }

        return $next($request);
    }
}
