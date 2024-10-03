<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'showStudentData'])->name('home');
Route::get('single_student/{id}',[StudentController::class,'singleStudentInfo'])->name('single_std');
Route::get('/add', [StudentController::class,'addStudentInfo']);
Route::get('/update',[StudentController::class,'updateStudentInfo']);
Route::get('/delete/{id}',[StudentController::class,'deleteStudentInfo'])->name('delete_std');



