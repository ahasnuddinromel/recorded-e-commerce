<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');
// Route::get('/user/create', [App\Http\Controllers\HomeController::class, 'userCreate'])->name('user.create');
Route::resource('/user', 'App\Http\Controllers\UserController');
