<?php

namespace App\Http\Middleware\Bendahara;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Bendahara
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the 'bendahara' role
        if (!auth()->check() || auth()->user()->usertype !== 'bendahara') {
            return redirect('/login')->with('error', 'Anda tidak memiliki akses sebagai bendahara.');
        }
        return $next($request);
    }
}
