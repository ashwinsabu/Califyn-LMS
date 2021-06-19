<?php

namespace App\Http\Middleware;

use Closure;


class CheckStaff
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
        if($request->position && $request->position != 1){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
