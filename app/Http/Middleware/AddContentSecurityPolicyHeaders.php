<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Vite;

class AddContentSecurityPolicyHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        Vite::useCspNonce();

        $response = $next($request);

        if (App::environment('production'))
            $response->headers->set(
                'Content-Security-Policy',
                "default-src 'self'; manifest-src 'self'; style-src 'self' 'unsafe-inline'; script-src 'unsafe-inline' 'unsafe-eval' 'nonce-" . Vite::cspNonce() . "'",
            );

        return $response;
    }
}
