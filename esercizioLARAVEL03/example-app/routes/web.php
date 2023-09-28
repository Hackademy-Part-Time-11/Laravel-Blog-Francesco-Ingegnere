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
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/aboutMe', function () {
    $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur qui vitae illo quia nulla amet vel veritatis nostrum dolore. Ipsa dicta consequuntur molestiae perspiciatis illo amet libero tempora esse veritatis.';
    return view('aboutMe', ['description' => $description]);
});