<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIifAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()) {
            if ($request->user()->role == 'admin') {

                return $next($request);
            }
        }

        return redirect()->route('dashboard');
    }
}
