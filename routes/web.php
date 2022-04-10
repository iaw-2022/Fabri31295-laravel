<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/images', 'App\Http\Controllers\ImageController@index')->name('images.index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');

Route::get('/resolutions', 'App\Http\Controllers\ResolutionController@index')->name('resolutions.index');

Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users.index');
