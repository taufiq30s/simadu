<?php

namespace App\Http\Middleware;

use Closure;

class RekamMedis
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
        if(auth()->user()->role !='rekam_medis')
        {
            return abort(403);
        }
        return $next($request);
    }
}
