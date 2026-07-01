<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\HomeController;
use App\Http\Controllers\FrontendController;

//frontend routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/marketplace', [FrontendController::class, 'marketplace'])->name('marketplace');

//editor routes
Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::prefix('editor')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('editor.dashboard');
});

Route::prefix('Editor')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);
});

