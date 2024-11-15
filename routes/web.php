<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/class')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('profile.index');

    // create
    Route::get('/create', [CourseController::class, 'create'])->name('profile.create');
    Route::post('/', [CourseController::class, 'create'])->name('profile.create');

    // edit
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('profile.edit');
    Route::patch('/update', [CourseController::class, 'update'])->name('profile.update');

    // delete
    Route::delete('/delete/{id}', [CourseController::class, 'destroy'])->name('profile.delete');

    // return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
