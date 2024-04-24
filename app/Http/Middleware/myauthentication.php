<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class myauthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            // User is authenticated, continue with the request.
            return $next($request);
        }
    
        // User is not authenticated, redirect or return an error response.
        return redirect('/login'); // You can customize the redirection URL.
        
    }
}
