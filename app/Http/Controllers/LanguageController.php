<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

final class LanguageController extends Controller
{
    public function toggle(Request $request): JsonResponse|RedirectResponse
    {
        $currentLocale = Session::get('locale', config('app.locale', 'en'));
        $targetLocale = $request->input('locale');
        if (!$targetLocale || !in_array($targetLocale, ['en', 'id'], true)) {
            $targetLocale = ($currentLocale === 'en') ? 'id' : 'en';
        }
        Session::put('locale', $targetLocale);
        App::setLocale($targetLocale);
        if ($request->expectsJson() || $request->isJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'locale' => $targetLocale,
                'translations' => [
                    'messages' => trans('messages'),
                ],
            ]);
        }
        return redirect()->back();
    }

    public function switch(Request $request): JsonResponse|RedirectResponse
    {
        return $this->toggle($request);
    }
}
