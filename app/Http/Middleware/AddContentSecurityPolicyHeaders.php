<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;

class AddContentSecurityPolicyHeaders
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
        Vite::useCspNonce();

        if (\Illuminate\Support\Facades\App::environment('production')) {
            return $next($request)->withHeaders([
                'Content-Security-Policy' => "default-src 'self'; manifest-src 'self'; style-src 'self' 'unsafe-inline'; script-src 'unsafe-inline' 'unsafe-eval' 'nonce-" . Vite::cspNonce() . "'",
            ]);
        }

        return $next($request);
    }
}
