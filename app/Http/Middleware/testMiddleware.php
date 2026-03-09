<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class testMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $a = 10;
        if ($a > 20) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}
