<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'showHome'])->name('home');

Route::get('/articoli', [App\Http\Controllers\ArticlesController::class, 'showArticles'])->name('articles');

Route::get('/articoli/{id}', [App\Http\Controllers\ArticlesController::class, 'showArticle'])->name('article');

Route::get('/chi-siamo', [App\Http\Controllers\PageController::class, 'showAboutMe'])->name('aboutMe');

Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'showForm'])->name('contacts');

Route::post('/contatti/invia', [App\Http\Controllers\ContactController::class, 'send'])->name('contacts.send');

Route::get('/account', [App\Http\Controllers\PageController::class, 'showAccount'])->name('account');



Route::get('/anime/generi', [App\Http\Controllers\AnimeController::class, 'genres'])->name('anime.genres');

Route::get('/anime/generi/{id}', [App\Http\Controllers\AnimeController::class, 'genre'])->name('anime.genre');

Route::get('/anime/view/{id}/{category_id?}', [App\Http\Controllers\AnimeController::class, 'anime'])->name('anime.anime');
