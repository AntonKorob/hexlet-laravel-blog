<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about'])->name('about', );

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/users', [PageController::class, 'users'])->name('users');

Route::get('/rating', [PageController::class, 'rating'])->name('rating');


