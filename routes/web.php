<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoServiceController;
use App\Http\Controllers\ItemController ;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TruckController;
use App\Models\CoService;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Count;

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

Route::get('/', [HomeController::class, 'arHome'] )->name('web');
Route::post('/contact', [HomeController::class, 'contact'] )->name('web.contact');
Route::get('/trucks/{truck}', [HomeController::class, 'truck'])->name('trucks.portofolio');
Route::get('/trucks/order/{truck}', [HomeController::class, 'makeOrder'])->name('trucks.order');
Route::post('/trucks/order/{truck}', [HomeController::class, 'saveOrder'])->name('trucks.order.save');
// Route::get('/services/{service}', [HomeController::class, 'service'])->name('services.portofolio');
Route::get('/services/land',[HomeController::class, 'land'] );
Route::get('/services/sea',[HomeController::class, 'sea'] );
Route::get('/services/air',[HomeController::class, 'air'] );
Route::get('/services/cars', [HomeController::class, 'cars']);
Route::get('/services/furniture', [HomeController::class, 'furniture']);
Route::get('/areas/{item}', [HomeController::class, 'areas'] )->name('areas.item');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('messages/{contact}', [ContactController::class, 'destroy'])->name('admin.messages.delete');
    Route::resource('about', AboutController::class);
    Route::resource('hero', HeroController::class);
    Route::resource('items', ItemController::class);
    Route::get('items/{item}/details',[ItemController::class, 'createDetails'])->name('details.create');
    Route::post('items/{item}/details/store',[ItemController::class, 'storeDetails'])->name('details.store');
    Route::delete('items/{item}/details/{details}',[ItemController::class, 'deleteDetails'])->name('details.delete');
    Route::resource('trucks', TruckController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('services', ServiceController::class);
    Route::get('/services/co', [ServiceController::class, 'coIndex'])->name('co.index');
    Route::post('/services/co', [ServiceController::class, 'coStore'])->name('co.store');
    Route::resource('others', OtherController::class);
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
});
