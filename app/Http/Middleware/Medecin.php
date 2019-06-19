<?php

namespace App\Http\Middleware;

use Closure;

class Medecin
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
        if (Auth::gard('medecin')->user()) {
            return $next($request);
        }

        abort('403', 'message....')
    }
}
