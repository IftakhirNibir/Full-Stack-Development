<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/second','second');

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::view('contact', 'contact')->name('contact');

Route::view('about','about')->name('about');

