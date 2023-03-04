<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    public function handle(Request $request, Closure $next, $token)
    {
        if($request->header('token') !== $token){
            return response()->json(['error' => 'Invalid Token'], 401);
        }

        return $next($request);
    }
}
