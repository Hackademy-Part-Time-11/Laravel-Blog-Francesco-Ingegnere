<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function showArticles() {
        $articles = [
            ['id' => 1, 'title' => 'Articolo #1', 'category' => 'Finanza', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 2, 'title' => 'Articolo #2', 'category' => 'Gossip', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Sport', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 4, 'title' => 'Articolo #4', 'category' => 'Cronaca', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 5, 'title' => 'Articolo #5', 'category' => 'Tech', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 6, 'title' => 'Articolo #6', 'category' => 'Natura', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
        ];
        return view('pages.articles', compact('articles'));
    }

    public function showArticle($id) {
        $articles = [
            ['id' => 1, 'title' => 'Articolo #1', 'category' => 'Finanza', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 2, 'title' => 'Articolo #2', 'category' => 'Gossip', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 3, 'title' => 'Articolo #3', 'category' => 'Sport', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 4, 'title' => 'Articolo #4', 'category' => 'Cronaca', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
            ['id' => 5, 'title' => 'Articolo #5', 'category' => 'Tech', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => false],
            ['id' => 6, 'title' => 'Articolo #6', 'category' => 'Natura', 'description' => "Questa è una breve descrizione dell'articolo...", 'visible' => true],
        ];
        return view('pages.article', ['articles' => $articles[$id-1]]);
    }
}
