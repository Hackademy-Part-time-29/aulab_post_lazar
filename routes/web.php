<?php

use App\Http\Controllers\AdminController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    $articles=Article::orderBy('created_at', 'desc')->take(4)->get();
    return view('welcome', compact('articles'));
})->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');
Route::post('/article/store', [ArticleController::class, 'store'])->middleware('auth')->name('article.store');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('article/category/{category}',[ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('article/user/{user}',[UserController::class, 'byUser'])->name('article.byUser');
Route::get('/careers',[UserController::class,'careers'])->name('careers');
Route::post('/careers/submit',[UserController::class,'careersSubmit'])->name('careers.submit');
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});