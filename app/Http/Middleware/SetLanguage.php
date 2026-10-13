<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

final class SetLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = Session::get('locale')
            ?? $request->cookie('locale')
            ?? config('app.locale', 'en');
        if (! in_array($locale, ['en', 'id'], true)) {
            $locale = config('app.locale', 'en');
        }
        App::setLocale($locale);
        if (Session::get('locale') !== $locale) {
            Session::put('locale', $locale);
        }
        if ($request->cookie('locale') !== $locale) {
            cookie()->queue(cookie()->forever('locale', $locale, path: '/', httpOnly: false));
        }

        return $next($request);
    }
}
