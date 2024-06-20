<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    $articles=Article::orderBy('created_at', 'desc')->take(4)->get();
    return view('welcome', compact('articles'));
})->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');