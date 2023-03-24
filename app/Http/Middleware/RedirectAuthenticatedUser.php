<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectAuthenticatedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (auth()->user()->role == 'admin') {
                $home = '/adminHome';
            } else if (auth()->user()->role == 'editor') {
                $home = '/editorHome';
            } else if (auth()->user()->role == 'user') {
                $home = '/home';
            } else {
                $home = '/superAdminHome';
            }
            return redirect($home);
        }
    
        return $next($request);
    }
    
}
