<?php

use App\Http\Controllers\Auth\AvatarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StockMovementController;

Route::middleware('guest')->group(function () {
    Route::get('/', HomeController::class)->name('home');

    Route::view('register', 'auth.register');
    Route::view('login', 'auth.login');

    Route::post('register', RegisterController::class)->name('register');
    Route::post('login', LoginController::class)->name('login');
});

Route::post('logout', LogoutController::class)->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('avatar', [AvatarController::class, 'store'])->name('avatar.store');
    Route::put('/avatar/{image}', [AvatarController::class, 'update'])->name('avatar.update');

    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::resource('warehouses', WarehouseController::class);
    Route::resource('items', ItemController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('subscription', SubscriptionController::class)->only(['index', 'store', 'destroy']);

    Route::get('stocks/{item}', [StockController::class, 'index'])->name('stocks.index');
    Route::get('stocks/create/{item}', [StockController::class, 'create'])->name('stocks.create');
    Route::post('stocks/{item}', [StockController::class, 'store'])->name('stocks.store');

    Route::get('stocks/{stock}/edit', [StockController::class, 'edit'])->name('stocks.edit');
    Route::put('stocks/{stock}', [StockController::class, 'update'])->name('stocks.update');

    Route::get('stock-movements', [StockMovementController::class, 'index'])->name('stock-movements.index');
    Route::get('stock-movements/create/{stock}', [StockMovementController::class, 'create'])->name('stock-movements.create');
    Route::post('stock-movements/{stock}', [StockMovementController::class, 'store'])->name('stock-movements.store');

});
