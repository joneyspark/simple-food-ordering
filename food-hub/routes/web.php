<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FoodItemController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// frontend routes
Route::group(['client'], function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');

    Route::get('/about', function () {
        return view('layouts.frontend.pages.about');
    });

    Route::get('/contact', function () {
        return view('layouts.frontend.pages.contact');
    });

    Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');

    Route::get('/thankyou', function () {
        return view('layouts.frontend.pages.thankyou');
    });
});


Route::middleware(['auth', 'admin', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'users'])->name('users');

    // Food resoucres
    Route::resource('foods', FoodItemController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/cart', function () {
        return view('layouts.frontend.pages.cart');
    });

    Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
    Route::get('/pending-orders', [OrderController::class, 'pending_orders'])->name('pending_orders');
    Route::get('/view-order/{id}', [OrderController::class, 'view_order'])->name('view_order');

    Route::delete('/order-delete/{id}', [OrderController::class, 'delete_order'])->name('delete_order');

});

// Employee routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/myaccount', [OrderController::class, 'myaccount'])->name('myaccount');
    Route::get('/view-customer-order/{id}', [OrderController::class, 'customer_view_order'])->name('customer_view_order');
    Route::get('/cart', function () {
        return view('layouts.frontend.pages.cart');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';
