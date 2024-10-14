<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyTestController;

Route::get('/',[MyTestController::class, 'dataTableLogic']);




