<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', [ExampleController::class, 'list']);
Route::get('/profile', [ExampleController::class, 'show']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', HomeController::class)->middleware('auth');
