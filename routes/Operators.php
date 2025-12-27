<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Operators\OperatorsController;

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])
        ->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::resource('operators', OperatorsController::class);
    });

});
