<?php

namespace App\Http\Middleware;

use App\Models\Package;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CheckstatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!(Auth()->user()->trx_id )) {
            $user = Package::all();
            return new Response(view('payment',compact('user')));
        } 
        else if ((Auth()->user()->status == 'pending' )) {
            return new Response(view('verification'));
        }
        else{
            return $next($request);
        }
        
        
    }
}