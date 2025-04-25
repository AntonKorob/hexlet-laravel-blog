<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    $tags = ['обучение', 'программирование', 'php', 'oop'];    
    $team = [
        ['name' => 'Hodor', 'position' => 'programmer'],
        ['name' => 'Joker', 'position' => 'CEO'],
        ['name' => 'Elvis', 'position' => 'CTO'],
    ];

    return view('about', ['tags' => $tags], ['team' => $team]);
})->name('about');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');




