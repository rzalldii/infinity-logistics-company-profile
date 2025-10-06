<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use Spatie\Honeypot\ProtectAgainstSpam;

use App\Http\Controllers\ContactController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/send-email', [ContactController::class, 'send'])
    ->middleware(['throttle:1,5', ProtectAgainstSpam::class])
    ->name('send.email');

Route::get('/about', function () { return view('section.about'); });
Route::get('/services', function () { return view('section.services'); });
Route::get('/news', function () { return view('section.news'); });
Route::get('/contact', function () { return view('section.contact'); });

Route::get('/nvocc', function () { return view('services.nvocc'); });
Route::get('/nvocc-schedule', function () { return view('services.nvocc-schedule'); });
Route::get('/freight-forwarding', function () { return view('services.freight-forwarding'); });
Route::get('/domestic-forwarding', function () { return view('services.domestic-forwarding'); });
Route::get('/flexitank-flexibag', function () { return view('services.flexitank-flexibag'); });
Route::get('/flexitank-flexibag-details', function () { return view('services.flexitank-flexibag-details'); });
Route::get('/project-logistics', function () { return view('services.project-logistics'); });
Route::get('/customs-clearance', function () { return view('services.customs-clearance'); });

Route::get('/terms-and-conditions', function () { return view('support.terms-and-conditions'); });
Route::get('/privacy-policy', function () { return view('support.privacy-policy'); });