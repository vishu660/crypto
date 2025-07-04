<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
       
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $role = strtolower($user->role);

        if ($role === 'admin') {
          
            return $next($request);
        }

        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }
        abort(403, 'Unauthorized');

        
        return redirect()->route('user')->with('error', 'You do not have permission to access admin area.');
    }
}
