<?php

use Illuminate\Support\Facades\Route;
//http://127.0.0.1:8000
Route::get('/', function () {
    return view('home');
});

//http://127.0.0.1:8000/blog
Route::get('/blog', function () {
    return view('blog');
});

//http://127.0.0.1:8000/service
Route::get('/service', function () {
    return view('service');
});

//http://127.0.0.1:8000/aboutus
Route::get('/aboutus', function () {
    return view('aboutus');
});

//http://127.0.0.1:8000/contactus
Route::get('/contactus', function () {
    return view('contactus');
});

//http://127.0.0.1:8000/blog_detail
Route::get('/blog_detail', function () {
    return view('blog_detail');
});