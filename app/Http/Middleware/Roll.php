<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Roll
{
    // public function handle(Request $request, Closure $next, $roll): Response
    // {
    //     if ($request->user()->roll !== $roll) {
    //         return redirect('error');
    //     }
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next, $roles)
    {
        $allowedRoles = explode('|', $roles);

        if (!in_array($request->user()->roll, $allowedRoles)) {
            return redirect('error');
        }

        return $next($request);
    }
}
