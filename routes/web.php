<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;

// Public route
Route::get('/', function () {
    return view('welcome');
});

// Protected routes - Harus login dulu
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/subscribe/plans', [SubscribeController::class, 'showPlans'])->name('subscribe.plans');
    Route::get('/subscribe/plan/{plan}', [SubscribeController::class, 'checkoutPlan'])->name('subscribe.checkout');
    Route::post('/subscribe/checkout', [SubscribeController::class, 'processCheckout'])->name('subscribe.process');
    Route::get('/subscribe/success', [SubscribeController::class, 'showSuccess'])->name('subscribe.success');
});