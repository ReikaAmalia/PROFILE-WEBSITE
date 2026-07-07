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
    $result = [
        'default_disk' => config('filesystems.default'),
        'bucket'   => config('filesystems.disks.s3.bucket'),
        'endpoint' => config('filesystems.disks.s3.endpoint'),
        'url'      => config('filesystems.disks.s3.url'),
        'region'   => config('filesystems.disks.s3.region'),
        'key_terisi'    => ! empty(config('filesystems.disks.s3.key')),
        'secret_terisi' => ! empty(config('filesystems.disks.s3.secret')),
    ];

    try {
        Storage::disk('s3')->put('debug-test.txt', 'halo dari production ' . now());
        $result['upload_test'] = 'BERHASIL - cek bucket Supabase untuk debug-test.txt';
    } catch (\Throwable $e) {
        $result['upload_test'] = 'GAGAL: ' . $e->getMessage();
    }

    return $result;
});