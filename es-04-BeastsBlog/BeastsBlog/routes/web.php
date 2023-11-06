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

Route::get('/articoli', [App\Http\Controllers\PageController::class, 'showArticles'])->name('articles');

Route::get('/articoli/{article}', [App\Http\Controllers\PageController::class, 'showArticle'])->name('article');

Route::get('/chi-siamo', [App\Http\Controllers\PageController::class, 'showAboutMe'])->name('aboutMe');

Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'showForm'])->name('contacts');
Route::post('/contatti/invia', [App\Http\Controllers\ContactController::class, 'send'])->name('contacts.send');

Route::get('/account', [App\Http\Controllers\PageController::class, 'showAccount'])->name('account');



Route::get('/anime/generi', [App\Http\Controllers\AnimeController::class, 'genres'])->name('anime.genres');

Route::get('/anime/generi/{id}', [App\Http\Controllers\AnimeController::class, 'genre'])->name('anime.genre');

Route::get('/anime/view/{id}/{category_id?}', [App\Http\Controllers\AnimeController::class, 'anime'])->name('anime.anime');


// Route::get('/insert-data', [App\Http\Controllers\ArticlesController::class, 'insertData']);
Route::get('/insert-data-anime', [App\Http\Controllers\AnimeController::class, 'categoryAnime']);

Route::prefix('impostazioni')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/', [App\Http\Controllers\AccountController::class, 'settings'])->name('account.settings');
    Route::post('/store', [App\Http\Controllers\AccountController::class, 'settingStore'])->name('account.settings.store');
});

Route::get('/counter', App\Livewire\Counter::class);


Route::get('/users', function() {
    return view('users');
});