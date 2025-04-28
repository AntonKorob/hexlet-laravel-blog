<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about'])->name('about', );

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/users', [PageController::class, 'users'])->name('users');

Route::get('/rating', [RatingController::class, 'index'])->name('rating.index');

Route::get('articles_d', [ArticleController::class, 'index'])->name('articles.index');
