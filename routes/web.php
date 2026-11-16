<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/articles', [ArticleController::class, 'index']);

Route::livewire('/articles', 'articles.list')->name('articles.index');
Route::livewire('/articles/{article}', 'articles.detail')->name('articles.show');
