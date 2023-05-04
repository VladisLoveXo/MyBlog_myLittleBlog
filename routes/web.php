<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('authors', 'AuthorController');
Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');