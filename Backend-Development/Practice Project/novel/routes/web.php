<?php

use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::get('/profile', ProfileController::class)->name('profile');

Route::resource('/users', UserController::class)->only(['create','index','store']);

Route::get('/home', function(){
    return view('home');
});


Route::get('/dashboard',[AdminController::class,'dashboard']);



