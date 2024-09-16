<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class,'viewpage'])->name('viewpage');
Route::post('/',[FormController::class,'postview'])->name('postview');


