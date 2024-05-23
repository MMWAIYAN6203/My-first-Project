<?php

use App\Helpers\Localization;
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

    Route::get('/blog', function () {
        return view('blog');
    });

    Route::get('/service', function () {
        return view('service');
    });

    Route::get('/aboutus', function () {
        return view('aboutus');
    });

    Route::get('/contactus', function () {
        return view('contactus');
    });

    Route::get('/blog_detail', function () {
        return view('blog_detail');
    });
});
