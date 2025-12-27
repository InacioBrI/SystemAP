<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PanelController;

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
    
    // Reset password
    Route::get('/reset-password/{token}', 'showReset')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');
});

/*
| Área administrativa
*/

Route::middleware('auth')->group(function () {
    Route::get('/admin', [PanelController::class, 'index'])->name('admin.panel');
    Route::get('/admin/new-report', [PanelController::class, 'newReport'])->name('admin.new-report');
    
    // Rotas para validação de itens
    Route::post('/admin/validar-item/{id}', [PanelController::class, 'validarItem'])->name('admin.validar-item');
    Route::post('/admin/rejeitar-item/{id}', [PanelController::class, 'rejeitarItem'])->name('admin.rejeitar-item');
});
