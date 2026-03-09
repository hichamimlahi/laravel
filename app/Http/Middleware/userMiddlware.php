<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony...
     */
    public function handle(Request $request, Closure $next)
    {
        if($request['nom']==='admin')
            return $next($request);
        else
            abort(403);
    }
}
