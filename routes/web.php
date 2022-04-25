<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResolutionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/images', ImageController::class)->middleware('auth');

Route::resource('/categories', CategoryController::class)->middleware('auth');

Route::resource('/resolutions', ResolutionController::class)->middleware('auth');

Route::resource('/users', UserController::class)->middleware('auth');




