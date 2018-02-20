<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        print_r($guard);
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
            print_r('auth-eeee');
        }
           print_r('privet no auth');
        return $next($request);
    }
}
