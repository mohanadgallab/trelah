<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ItemController ;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TruckController;
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

Route::get('/', [HomeController::class, 'arHome'] );

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('about', AboutController::class);
    Route::resource('hero', HeroController::class);
    Route::resource('items', ItemController::class);
    Route::resource('trucks', TruckController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('services', ServiceController::class);
});
