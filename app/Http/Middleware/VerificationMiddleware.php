<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Resources\views;

class VerificationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        dd('here');

        return $next($request);
    }
}