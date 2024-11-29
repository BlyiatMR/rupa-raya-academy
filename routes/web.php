<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
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

Route::middleware(['auth', 'verified'])->prefix('admin')->group( function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'class'],function () {
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
    });

    // Not Yet Worked - 28/11/2024
    Route::group(['prefix' => 'gallery'],function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');


            // create
            Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
            Route::post('/', [GalleryController::class, 'store'])->name('gallery.store');

            // edit
            Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
            Route::post('/{id}', [GalleryController::class, 'update'])->name('gallery.update');

            // delete
            Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
    });

    // Not Yet Worked - 28/11/2024
    Route::group(['prefix' => 'blog'],function () {
            Route::get('/', [BlogController::class, 'index'])->name('blog.index');


            // create
            Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
            Route::post('/', [BlogController::class, 'store'])->name('blog.store');

            // edit
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
            Route::post('/{id}', [BlogController::class, 'update'])->name('blog.update');

            // delete
            Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
