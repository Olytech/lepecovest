<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class InvestorMiddleware
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
        if(Auth::check() && Auth::user()->role == "investor"){

            return $next($request); 
            }

            else{

                abort(403);
            }
    }
}
