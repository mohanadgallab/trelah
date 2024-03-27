<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoServiceController;
use App\Http\Controllers\ItemController ;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TruckController;
use App\Models\CoService;
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
Route::get('/trucks/{truck}', [HomeController::class, 'truck'])->name('trucks.portofolio');
Route::get('/services/{service}', [HomeController::class, 'service'])->name('services.portofolio');
Route::get('/areas/{item}', [HomeController::class, 'areas'] )->name('areas.item');

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
    Route::get('/services/co', [ServiceController::class, 'coIndex'])->name('co.index');
    Route::post('/services/co', [ServiceController::class, 'coStore'])->name('co.store');
    Route::resource('others', OtherController::class);
});
