<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProductCategoryController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('articles', [\App\Http\Controllers\ArticleController::class, 'index'] );
Route::get('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show']);
Route::get('articles/create', [\App\Http\Controllers\ArticleController::class, 'create']);
Route::post('articles/store', [\App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get('articles/{id}/edit', [\App\Http\Controllers\ArticleController::class, 'edit']);
Route::put('articles/{id}/update', [\App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{id}/delete', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('authors', [AuthorController::class, 'index']);
Route::get('authors/{id}', [AuthorController::class, 'show']);

Route::get('productcategories', [ProductCategoryController::class, 'index']);
Route::get('productcategories/{id}', [ProductCategoryController::class, 'show']);



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

});

require __DIR__.'/auth.php';
