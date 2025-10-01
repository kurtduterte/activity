<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()) {
            return redirect('/login');
        }

        if ($request->user()->role !== $role) {
            // Redirect to the correct dashboard based on their role
            if ($request->user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($request->user()->role === 'user') {
                return redirect()->route('user.dashboard');
            }

            return redirect('/');
        }

        return $next($request);
    }
}
