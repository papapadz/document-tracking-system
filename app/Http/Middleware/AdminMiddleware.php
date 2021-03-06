<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (!Auth::guest() && Auth::user()->user_level == 1) {
            return $next($request);
        } else if (!Auth::guest() && Auth::user()->user_level == 2) {
          return $next($request);
        } else if (!Auth::guest() && Auth::user()->user_level == 3) {
          return $next($request);
        }
        return redirect('/');
    }
}
