<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email',[EmailController::class,'sendEmail']);

Route::get('contact',[EmailController::class, 'contactform']);

Route::post('contact',[EmailController::class, 'sendContactEmail'])->name('contact');