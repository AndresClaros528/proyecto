<?php

namespace sisVentas\Http\Middleware;

use Closure;
use Illuminate\Support\Facade\Auth;

class EsAdmin
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

        $user=Auth::user();
        if(!$user->esAdmin()){
            return redirect ('/');
        }
    
        return $next($request);
    }
}
