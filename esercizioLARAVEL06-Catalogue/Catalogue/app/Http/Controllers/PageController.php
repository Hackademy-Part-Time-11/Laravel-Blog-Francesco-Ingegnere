<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Info;

class PageController extends Controller
{
    private $articles = [];

    public function __construct()
    {
        $this->articles = [
            1 => ['category' => 'tv', 'brand' => 'Sony', 'name' => 'TV 42"', 'price' => 1000],
            2 => ['category' => 'tv', 'brand' => 'Samsung', 'name' => 'TV 55"', 'price' => 800],
            3 => ['category' => 'tv', 'brand' => 'LG', 'name' => 'TV 32"', 'price' => 800],
            4 => ['category' => 'notebook', 'brand' => 'HP', 'name' => 'Notebook i7', 'price' => 750],
            5 => ['category' => 'notebook', 'brand' => 'Lenovo', 'name' => 'Notebook i5', 'price' => 600],
            6 => ['category' => 'notebook', 'brand' => 'Dell', 'name' => 'Notebook i3', 'price' => 400],
            7 => ['category' => 'smartphone', 'brand' => 'Samsung', 'name' => 'S23', 'price' => 800],
            8 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14', 'price' => 1000],
            9 => ['category' => 'smartphone', 'brand' => 'Apple', 'name' => 'iPhone 14 Pro', 'price' => 1300],
            10 => ['category' => 'tablet', 'brand' => 'Samsung', 'name' => 'Galaxy Tab', 'price' => 300],
            11 => ['category' => 'tablet', 'brand' => 'Apple', 'name' => 'iPad', 'price' => 400],
        ];
    }

    public function showHome() {
        return view('index');
    }

    public function showCatalogue() {
        return view('catalogue', ['articles' => $this->articles]);
    }

    public function showArticle($id) {
        return view('article', ['article' => $this->articles[$id], 'articleId' => $id]);
    }

    public function sendMail(Request $request) {
        $user = $this->articles[$request->article_id];

        Mail::to('admin@example.it')->send(new Info(
            $request->name,
            $request->email,
            $request->message,
        ));

        return redirect()->back()->with(['success' => 'richiesta inviata con successo']);
    }
}
