<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        dd('Middleware is_admin em execução');
    
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }
    
        return redirect('/')->withErrors('Acesso negado.');
    }
}
