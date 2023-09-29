<?php

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

Route::get('/', function () {
    $title = 'HOME PAGE';
    return view('home', ['title' => $title]);
})->name('home');

Route::get('pages/articles', function () {
    
    return view('pages/articles');
})->name('articles');

Route::get('pages/aboutMe', function () {
    $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur qui vitae illo quia nulla amet vel veritatis nostrum dolore. Ipsa dicta consequuntur molestiae perspiciatis illo amet libero tempora esse veritatis.';
    return view('pages/aboutMe', ['description' => $description]);
})->name('aboutMe');