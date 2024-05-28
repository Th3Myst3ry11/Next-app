<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/woman', function () {
    return view('pages.woman');
})->name('woman');
Route::get('/man', function () {
    return view('pages.man');
})->name('man');
Route::get('/feedback', function () {
    return view('pages.feedback');
})->name('feedback');
Route::get('/brands', function () {
    return view('pages.brands');
})->name('brand');
Route::get('/signing', function () {
    return view('pages.signing');
})->name('signing');
Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');
Route::get('/forgot', function () {
    return view('pages.forgot');
})->name('forgot');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
