<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

require __DIR__.'/auth.php';

Route::get('/listado', 'App\Http\Controllers\ImageController@index')->name('images.index');

Route::get('/categories', 'App\Http\Controllers\CategoryController@index')->name('categories.index');

Route::get('/resolutions', 'App\Http\Controllers\ResolutionController@index')->name('resolutions.index');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
 });
