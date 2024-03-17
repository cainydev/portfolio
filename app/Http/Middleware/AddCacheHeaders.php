<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddCacheHeaders
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
        $cacheable = [
            'ttf',
            'svg',
            'css',
            'js',
            'png',
            'jpg',
            'jpeg'
        ];

        $response = $next($request);
        if ($request->is('*.html')) {
            $response->headers->set("pragma", "no-cache");
            $response->headers->set("Cache-Control", "no-store,no-cache, must-revalidate, post-check=0, pre-check=0");
        } else {
            $response->headers->set("pragma", "private");
            $response->headers->set("Cache-Control", "private, max-age=31536000, immutable");
        }
        return $response;
    }
}
