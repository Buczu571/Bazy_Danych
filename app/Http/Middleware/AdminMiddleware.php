<?php

namespace App\Http\Middleware;

use Closure; // Dodaj ten import

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Twoja logika middleware'u
        
        return $next($request);
    }
}
