<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/images', 'App\Http\Controllers\ImageController@index')->middleware('auth');

Route::get('preview', 'App\Http\Controllers\ImageController@preview')->middleware('auth');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->middleware('auth');

Route::get('/resolutions', 'App\Http\Controllers\ResolutionController@index')->middleware('auth');

Route::get('/users', 'App\Http\Controllers\UserController@index')->middleware('auth');




