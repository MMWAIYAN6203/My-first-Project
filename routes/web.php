<?php

use App\Helpers\Localization;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Middleware\EnsureLocalization;
use Illuminate\Support\Facades\Route;


Route::post('/localization', function () {
    Localization::setLocale(request()->input('locale'));
    return redirect()->route('home');
})->name('localization');

Route::middleware([EnsureLocalization::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.detail');

    // Route::get('/team', [TeamController::class, 'index']);
    // Route::get('/team/{team}', [TeamController::class, 'show'])->name('team.detail');

    Route::get('/service', function () {
        return view('service');
    });

    Route::get('/aboutus', function () {
        return view('aboutus');
    });

    Route::get('/contactus', function () {
        return view('contactus');
    });
});
