<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() == 'ADM') {
            // The user is logged in...
            return $next($request);
        }
        // if(session('utype') === 'ADM')
        // {
        // return $next($request);
        // }
        // else
        // {
        //     Session()->flush();
        //     return redirect()->route('login');
        // }
        return $next($request);
    }
}
