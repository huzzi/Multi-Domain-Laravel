<?php

namespace App\Http\Middleware;

use Closure;

class IsSiteManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $subdomain = $request->route('subdomain');
        if (auth()->check() && auth()->user()->isSiteManager()) {
            return $next($request);
        }
        if ($subdomain) {
            return redirect()->route('site.home', ['domain' => $subdomain]);
        }
        return redirect()->route('app.home');
    }
}
