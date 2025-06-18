<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

// Redirect `/` based on login status
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');  // If logged in, go to /home
    }
    return redirect()->route('login');     // If guest, go to /login
});

// Guest-only routes
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return Inertia::render('auth/Login');
    })->name('login');

    // You can also add register here if needed
    // Route::get('/register', ...);
});

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        return Inertia::render('Home');
    })->name('home');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/products/{id}', function ($id) {
        return Inertia::render('Product/Show', ['id' => $id]);
    })->name('products.show');
});

// Load additional route files
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
