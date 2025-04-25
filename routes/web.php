<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello From Hexlet';
})->name('root');

Route::get('/about', function () {
    return view('about');
})->name('about');