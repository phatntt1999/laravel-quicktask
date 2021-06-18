<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LangMiddlewareLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $language = null;
        if ($request->session()->has('web-language')) {
            $language = $request->session()->get('web-language');
        }
        config(['app.locale' => $language]);

        return $next($request);
    }
}
