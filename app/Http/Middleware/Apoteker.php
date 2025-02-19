<?php

namespace App\Http\Middleware;

use Closure;

class Apoteker
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
        if(auth()->user()->role !='apoteker')
        {
            return abort(403);
        }
        return $next($request);
    }
}
