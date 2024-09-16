<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::redirect('/','/task')->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/', [TaskController::class,'index'])->name('task.index');
    Route::get('/create',[TaskController::class,'create'])->name('task.create');
    Route::post('/store',[TaskController::class,'store'])->name('task.store');
    Route::get('/edit/{task}',[TaskController::class,'edit'])->name('task.edit');
    Route::put('/update/{task}',[TaskController::class,'update'])->name('task.update');
    Route::get('/view/{task}',[TaskController::class,'show'])->name('task.show');
    Route::delete('/delete/{task}',[TaskController::class,'destroy'])->name('task.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
