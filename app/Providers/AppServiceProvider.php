<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAuthenticated;
use Illuminate\Support\ServiceProvider;


use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Route::middleware([
            EnsureAuthenticated::class,
        ])->group(function () {

            Route::get('/', function () {
                return view('home');
            })->name('home');

            Route::resource('staffs', StaffController::class);


            Route::resource('parents', ParentController::class);


            Route::resource('students', StudentController::class);


            Route::resource('classes', ClassController::class);


            Route::resource('subjects', SubjectController::class);


            Route::resource('complaints', ComplaintController::class);
        });
    }
}
