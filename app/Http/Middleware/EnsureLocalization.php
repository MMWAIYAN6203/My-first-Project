<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureLocalization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($locale = session()->get('locale') ?? null) {
            app()->setLocale($locale);
        } else {
            $locale = 'thai';
            app()->setLocale($locale);
        }
        session()->put('locale', $locale);
        return $next($request);
    }
}
