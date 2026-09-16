<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

final class LanguageController extends Controller
{
    public function toggle(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'locale' => ['required', 'string', 'in:en,id'],
        ]);

        $locale = $validated['locale'];
        Session::put('locale', $locale);
        App::setLocale($locale);

        return response()->json([
            'success' => true,
            'locale' => $locale,
            'translations' => [
                'messages' => trans('messages'),
            ]
        ]);
    }

    public function switch(Request $request): JsonResponse
    {
        return $this->toggle($request);
    }
}
