<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

    // Rotas de perfil
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Rotas de categoria
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('categories');
        Route::get('/create', [CategoriesController::class, 'create'])->name('create');
        Route::post('/create', [CategoriesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoriesController::class, 'show'])->name('show');
        Route::patch('/edit/{id}', [CategoriesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoriesController::class, 'destroy'])->name('destroy');
    });

    // Rotas de post
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', [PostsController::class, 'index'])->name('posts');
        Route::get('/create', [PostsController::class, 'create'])->name('create');
        Route::post('/create', [PostsController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PostsController::class, 'show'])->name('show');
        Route::post('/edit/{id}', [PostsController::class, 'update'])->name('update');
    });
});

require __DIR__ . '/auth.php';
