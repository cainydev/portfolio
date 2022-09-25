<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddCacheHeaders
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
        if ($request->is('*.html')) {
            return $next($request)->withHeaders([
                "pragma" => "no-cache",
                "Cache-Control" => "no-store,no-cache, must-revalidate, post-check=0, pre-check=0"
            ]);
        } else {
            return $next($request)->withHeaders([
                "pragma" => "private",
                "Cache-Control" => "private, max-age=31536000, immutable"
            ]);
        }
    }
}
