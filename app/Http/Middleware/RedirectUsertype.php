<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectUsertype
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        $routeName = $request->route()->getName();

        // Pastikan hanya user dengan role yang sesuai yang bisa mengakses dashboard mereka
        if (
            ($user->usertype === 'user' && $routeName === 'dashboard') ||
            ($user->usertype === 'bendahara' && $routeName === 'bendahara.dashboard')
        ) {
            return $next($request);
        }

        // Redirect ke dashboard masing-masing jika user mencoba mengakses halaman lain
        return match ($user->usertype) {
            'user' => redirect()->route('dashboard'),
            'bendahara' => redirect()->route('bendahara.dashboard'),
            default => redirect('/login')->withErrors(['error' => 'User type not recognized or unauthorized access.']),
        };
    }
}
