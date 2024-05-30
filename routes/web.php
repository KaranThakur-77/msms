<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ComplaintController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::resource('users', UserController::class);


Route::resource('classes', ClassController::class);


Route::resource('subjects', SubjectController::class);


Route::resource('complaints', ComplaintController::class);