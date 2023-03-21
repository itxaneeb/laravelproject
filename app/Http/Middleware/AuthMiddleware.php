<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $user): Response
    {
        

        // dd(auth()->user());
        $role = auth()->user()->role;
       
        if ($role == $user) {
            return $next($request);
        }
        

        if ($role == 'user') {      
            return redirect('/home');
        } else {
            return redirect('/ad');
        }
    }
}
