<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;


Route::get('/', function () {
    $articles=Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
    return view('welcome', compact('articles'));
})->name('homepage');


Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('article/category/{category}',[ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('article/user/{user}',[UserController::class, 'byUser'])->name('article.byUser');
Route::get('/careers',[UserController::class,'careers'])->name('careers');
Route::post('/careers/submit',[UserController::class,'careersSubmit'])->name('careers.submit');
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::middleware('admin')->group(function(){
    Route::patch('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::patch('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::patch('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    Route::put('/admin/edit/tag/{tag}', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/tag/{tag}',[AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/category/{category}',[AdminController::class,'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/category/{category}',[AdminController::class,'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store',[AdminController::class, 'storeCategory'])->name('admin.storeCategory');
});
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
});
Route::middleware('revisor')->group(function(){
    Route::post('/revisor/{article}/accept',[RevisorController::class,'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/revisor/{article}/reject',[RevisorController::class,'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/revisor/{article}/undo',[RevisorController::class,'undoArticle'])->name('revisor.undoArticle');
});
Route::middleware('writer')->group(function(){
    Route::get('/article/create', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->middleware('auth')->name('article.store');
});
Route::get('/article.search', [ArticleController::class, 'articleSearch'])->name('article.search');

