<?php

use Illuminate\Support\Facades\Route;

use Spatie\Honeypot\ProtectAgainstSpam;

use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('sections.index');
})
    ->name('home');

Route::post('/send-email', [ContactController::class, 'send'])
    ->middleware(['throttle:1,3', ProtectAgainstSpam::class])
    ->name('send.email');

Route::post('/language/switch', [LanguageController::class, 'switch'])
    ->name('language.switch');

Route::get('/maintenance/{token}', [MaintenanceController::class, 'clear']);

Route::get('/about', function () {
    return view('sections.about');
})
    ->name('about');
Route::get('/services', function () {
    return view('sections.services');
})
    ->name('services');
Route::get('/news', function () {
    return view('sections.news');
})
    ->name('news');
Route::get('/contact', function () {
    return view('sections.contact');
})
    ->name('contact');

Route::get('/nvocc', function () {
    return view('services.nvocc');
})
    ->name('nvocc');
Route::get('/nvocc-schedule', function () {
    return view('services.nvocc-schedule');
})
    ->name('nvocc-schedule');
Route::get('/freight-forwarding', function () {
    return view('services.freight-forwarding');
})
    ->name('freight-forwarding');
Route::get('/domestic-forwarding', function () {
    return view('services.domestic-forwarding');
})
    ->name('domestic-forwarding');
Route::get('/flexitank-flexibag', function () {
    return view('services.flexitank-flexibag');
})
    ->name('flexitank-flexibag');
Route::get('/flexitank-flexibag-details', function () {
    return view('services.flexitank-flexibag-details');
})
    ->name('flexitank-flexibag-details');
Route::get('/project-logistics', function () {
    return view('services.project-logistics');
})
    ->name('project-logistics');
Route::get('/customs-clearance', function () {
    return view('services.customs-clearance');
})
    ->name('customs-clearance');
