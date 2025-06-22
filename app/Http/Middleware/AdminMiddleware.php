<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $role = strtolower(Auth::user()->role);
        $roleRouteMap = [
            'admin' => 'admin',
            'customer' => 'user',
        ];

        if ($role === 'admin') {
            return $next($request);
        } else {
            $request->session()->flash('error', 'You do not have permission to access this page.');
            $redirectRoute = $roleRouteMap[$role] ?? 'login';
            return redirect()->route($redirectRoute);
        }
    }
}
