<?php

namespace App\Http\Middleware;

use Closure;

class Dokter
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
        if(auth()->user()->role !='dokter')
        {
            return abort(403);
        }
        return $next($request);
    }
}
