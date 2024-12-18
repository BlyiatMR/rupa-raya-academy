<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return Inertia::render('WelcomeView', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::prefix('/about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about.index');
});

Route::prefix('/listing')->group(function () {
    Route::get('/', [ListingController::class, 'index'])->name('listing.index');
    Route::get('/fullstack', [ListingController::class, 'fullstack'])->name('fullstack.index');
    Route::get('/flutter', [ListingController::class, 'flutter'])->name('flutter.index');
    Route::get('/uiux', [ListingController::class, 'uiux'])->name('uiux.index');
    Route::get('/3darchitectural', [ListingController::class, 'architectural'])->name('3darchitectural.index');
    Route::get('/3dmodelling', [ListingController::class, 'modelling'])->name('3dmodelling.index');
});

Route::prefix('/gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
});

Route::prefix('/news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';