<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FoodItemController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// frontend routes
Route::group(['client'],function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');

    // Route::get('/', function () {
    //     return view('layouts.frontend.pages.home');
    // });
    
    Route::get('/about', function () {
        return view('layouts.frontend.pages.about');
    });

    Route::get('/contact', function () {
        return view('layouts.frontend.pages.contact');
    });

    Route::get('/menu', function () {
        return view('layouts.frontend.pages.menu');
    });

    Route::get('/cart', function () {
        return view('layouts.frontend.pages.cart');
    });


});

// Route::get('/login', function(){
//     return view('')
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'users'])->name('users');

    // Food resoucres
    Route::resource('foods', FoodItemController::class);
    Route::resource('category', CategoryController::class);
});

// Employee routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';
