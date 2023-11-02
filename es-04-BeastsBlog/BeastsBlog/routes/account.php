<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


/* Route::get('/articoli/crea', [App\Http\Controllers\ArticlesController::class, 'create'])->name('account.articles.create');
Route::post('/articoli/crea', [App\Http\Controllers\ArticlesController::class, 'store'])->name('account.articles.store'); */

Route::resource('articles', App\Http\Controllers\ArticleController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class)->middleware(['auth.admin']);


Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
