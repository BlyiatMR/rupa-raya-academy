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
    Route::get('/', [CourseController::class, 'index'])->name('course.index');
    
    Route::get('/detail/{slug}', [CourseController::class, 'show'])->name('course.detail');

    // create
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/', [CourseController::class, 'store'])->name('course.store');

    // edit
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/{id}', [CourseController::class, 'update'])->name('course.update');

    // delete
    Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('course.delete');

    // return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
