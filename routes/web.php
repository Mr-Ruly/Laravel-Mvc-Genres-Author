<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('home');
});

// Genre CRUD
Route::resource('genres', GenreController::class);

// Author CRUD
Route::resource('authors', AuthorController::class);

