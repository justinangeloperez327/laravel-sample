<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;

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
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    // Route::get('plans', [ItemController::class, 'index'])->name('items.index');
    // Route::get('plans/create', [ItemController::class, 'create'])->name('plans.create');
    // Route::post('plans', [ItemController::class, 'store'])->name('plans.store');
    // Route::get('plans/{item}', [ItemController::class, 'show'])->name('plans.show');
    // Route::get('plans/{item}/edit', [ItemController::class, 'edit'])->name('plans.edit');
    // Route::put('plans/{item}', [ItemController::class, 'update'])->name('plans.update');
    // Route::delete('plans/{item}', [ItemController::class, 'destroy'])->name('plans.destroy');

    Route::resource('warehouses', WarehouseController::class);
    Route::resource('items', ItemController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('subscription', SubscriptionController::class)->only(['index', 'store', 'destroy']);
});
