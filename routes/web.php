<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// FRONTEND ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/pri', 'showPrivacyPolicy')->name('privacy-policy');
});

// LOCALE ROUTES
Route::get('/locale/{lang}', [LocaleController::class, 'language'])->name('locale');