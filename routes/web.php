<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Editor\HomeController;
use App\Http\Controllers\FrontendController;

//frontend routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/marketplace', [FrontendController::class, 'marketplace'])->name('marketplace');

//editor routes
Route::prefix('editor')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('editor.dashboard');
});

Route::prefix('Editor')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index']);
});

//debug sementara - HAPUS setelah selesai
Route::get('/debug-s3', function () {
    return [
        'livewire_temp_disk' => config('livewire.temporary_file_upload.disk') ?? 'default (' . config('filesystems.default') . ')',
        'gd_loaded' => extension_loaded('gd'),
        'gd_functions' => [
            'imagecreatefromstring' => function_exists('imagecreatefromstring'),
            'imagejpeg' => function_exists('imagejpeg'),
        ],
        'files_in_bucket_root' => Storage::disk('s3')->files(),
        'files_in_products' => Storage::disk('s3')->files('products'),
    ];
});