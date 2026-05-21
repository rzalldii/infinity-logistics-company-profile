<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $locale = $request->input('locale');

        if (in_array($locale, ['en', 'id'])) {
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

        return response()->json([
            'success' => false,
            'message' => 'Invalid locale'
        ], 400);
    }
}
