<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCategoryController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about'])->name('about', );


Route::get('/users', [PageController::class, 'users'])->name('users');

Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles', [ArticleController::class, 'search'])->name('articles.index');

Auth::routes();

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');

Route::get('/articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');   

Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');