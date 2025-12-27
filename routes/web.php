<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
| Rotas públicas
*/

Route::get('/', function () {
    return view('layout');
})->name('layout');

Route::get('/report', function () {
    return view('report.report');
})->name('report');

/*
| Autenticação
*/

Route::controller(AuthController::class)->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');

    // Logout
    Route::post('/logout', 'logout')->name('logout');

    // Forgot password
    Route::get('/forgot-password', 'showForgot')->name('password.request');
    Route::post('/forgot-password', 'sendResetLink')->name('password.email');
});

/*
| Área administrativa
*/

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
