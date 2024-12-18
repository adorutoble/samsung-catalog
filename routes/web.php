<?php

use App\Models\Catalog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->get('/catalog', function () {
    // Return the view for the catalog page
    return view('catalog');
});

Route::get('/catalog', function () {
    return view('catalog', ['catalogs'=> Catalog::all()]);
})->name('catalog');

Route::get('/catalog/{detail:slug}', function (Catalog $detail) {
    return view('detail', ['catalog'=> $detail]);
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'userMiddleware'])->group(function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

// Route::middleware(['auth', 'adminMiddleware'])->group(function(){
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });
