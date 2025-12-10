<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
})->name('layout');

Route::get('/login', function () {
    return view('auth.login') ;
})->name('login');


Route::get('/Report', function () {
    return view('report.report') ;
})->name('report');