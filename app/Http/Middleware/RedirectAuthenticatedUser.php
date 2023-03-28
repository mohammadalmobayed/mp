<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

$GLOBALS['home'] = '';

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
                $GLOBALS['home'] = '/adminHome';
            } else if (auth()->user()->role == 'editor') {
                $GLOBALS['home'] = '/editorHome';
            } else if (auth()->user()->role == 'user') {
                $GLOBALS['home'] = '/home';
            } else {
                $GLOBALS['home'] = '/superAdminHome';
            }
            return redirect($GLOBALS['home']);
        }
    
        return $next($request);
    }
}

