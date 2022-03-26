<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Verify if request is JSON
        if (!$request->expectsJson()) {
            return response(['status'=>406,
            'message' => 'Only JSON requests are allowed']);
        }

        return $next($request);
    }
}
