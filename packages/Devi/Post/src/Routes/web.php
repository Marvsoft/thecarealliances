<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'admin_locale', 'user']], function () {
    Route::prefix(config('app.admin_path'))->group(function () {
        Route::prefix('posts')->group(function () {
            Route::get('/', [Devi\Post\Http\Controllers\Post\PostController::class, 'index'])->name('admin.posts.index');

            Route::get('create', [Devi\Post\Http\Controllers\Post\PostController::class, 'create'])->name('admin.posts.create');

            Route::post('create', [Devi\Post\Http\Controllers\Post\PostController::class, 'store'])->name('admin.posts.store');

            Route::get('edit/{id}', [Devi\Post\Http\Controllers\Post\PostController::class, 'edit'])->name('admin.posts.edit');

            Route::put('edit/{id}', [Devi\Post\Http\Controllers\Post\PostController::class, 'update'])->name('admin.posts.update');

            Route::delete('{id}', [Devi\Post\Http\Controllers\Post\PostController::class, 'destroy'])->name('admin.posts.delete');
        });

        Route::prefix('category')->group(function () {
            Route::get('/', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'index'])->name('admin.category.index');

            Route::get('create', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'create'])->name('admin.category.create');

            Route::post('create', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'store'])->name('admin.category.store');

            Route::get('edit/{id}', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'edit'])->name('admin.category.edit');

            Route::put('edit/{id}', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'update'])->name('admin.category.update');

            Route::delete('{id}', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'destroy'])->name('admin.category.delete');

            Route::put('mass-destroy', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'massDestroy'])->name('admin.category.mass_delete');

            Route::put('mass-update', [Devi\Post\Http\Controllers\Category\CategoryController::class, 'massUpdate'])->name('admin.category.mass_update');
        });

        Route::prefix('tags')->group(function () {
            Route::get('/', [Devi\Post\Http\Controllers\Tag\TagController::class, 'index'])->name('admin.tags.index');

            Route::get('create', [Devi\Post\Http\Controllers\Tag\TagController::class, 'create'])->name('admin.tags.create');

            Route::post('create', [Devi\Post\Http\Controllers\Tag\TagController::class, 'store'])->name('admin.tags.store');

            Route::get('edit/{id}', [Devi\Post\Http\Controllers\Tag\TagController::class, 'edit'])->name('admin.tags.edit');

            Route::put('edit/{id}', [Devi\Post\Http\Controllers\Tag\TagController::class, 'update'])->name('admin.tags.update');

            Route::delete('{id}', [Devi\Post\Http\Controllers\Tag\TagController::class, 'destroy'])->name('admin.tags.delete');

            Route::put('mass-destroy', [Devi\Post\Http\Controllers\Tag\TagController::class, 'massDestroy'])->name('admin.tags.mass_delete');

            Route::put('mass-update', [Devi\Post\Http\Controllers\Tag\TagController::class, 'massUpdate'])->name('admin.tags.mass_update');
        });
    });
});
