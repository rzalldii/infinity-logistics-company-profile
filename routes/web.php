<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MaintenanceController;

Route::view('/', 'sections.home')->name('home');
Route::view('/about', 'sections.about')->name('about');
Route::view('/services', 'sections.services')->name('services');
Route::view('/contact', 'sections.contact')->name('contact');

Route::prefix('services')->name('services.')->group(function () {
    Route::view('/nvocc', 'services.nvocc')->name('nvocc');
    Route::view('/nvocc-schedule', 'services.nvocc-schedule')->name('nvocc-schedule');
    Route::view('/freight-forwarding', 'services.freight-forwarding')->name('freight-forwarding');
    Route::view('/domestic-forwarding', 'services.domestic-forwarding')->name('domestic-forwarding');
    Route::view('/flexitank-flexibag', 'services.flexitank-flexibag')->name('flexitank-flexibag');
    Route::view('/flexitank-flexibag/details', 'services.flexitank-flexibag-details')->name('flexitank-flexibag-details');
    Route::view('/project-logistics', 'services.project-logistics')->name('project-logistics');
    Route::view('/customs-clearance', 'services.customs-clearance')->name('customs-clearance');
});

Route::post('/contact/send', [ContactController::class, 'send'])
    ->middleware(['throttle:1,3', ProtectAgainstSpam::class])
    ->name('contact.send');

Route::post('/language/toggle', [LanguageController::class, 'toggle'])
    ->name('language.toggle');
Route::post('/language/switch', [LanguageController::class, 'toggle']);

Route::get('/maintenance/{token}', [MaintenanceController::class, 'clear'])
    ->middleware('throttle:5,1')
    ->where('token', '[A-Za-z0-9\-_]{16,}');

Route::permanentRedirect('/nvocc', '/services/nvocc');
Route::permanentRedirect('/nvocc-schedule', '/services/nvocc-schedule');
Route::permanentRedirect('/freight-forwarding', '/services/freight-forwarding');
Route::permanentRedirect('/domestic-forwarding', '/services/domestic-forwarding');
Route::permanentRedirect('/flexitank-flexibag', '/services/flexitank-flexibag');
Route::permanentRedirect('/flexitank-flexibag-details', '/services/flexitank-flexibag/details');
Route::permanentRedirect('/project-logistics', '/services/project-logistics');
Route::permanentRedirect('/customs-clearance', '/services/customs-clearance');