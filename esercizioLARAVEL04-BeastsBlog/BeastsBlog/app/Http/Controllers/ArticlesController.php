<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function showArticles() {
        $articleVisible = [];
        foreach(Article::all() as $article) {
            if($article['visible']){
                array_push($articleVisible, $article);
            }
        }
        return view('pages.articles', ['articles' => $articleVisible]);
    }

    public function showArticle(Article $article) {

        return view('pages.article', ['articles' => $article]);
         
    }

    public function insertData() {
        Article::create([
            'title' => 'Titolo #1',
            'category' => 'Economia',
            'description' => 'Articolo di economia',
            'visible' => true,
            'body' => '...',
        ]);

        Article::create([
            'title' => 'Titolo #2',
            'category' => 'Esteri',
            'description' => 'Articolo di esteri',
            'visible' => true,
            'body' => '...',
        ]);

        Article::create([
            'title' => 'Titolo #3',
            'category' => 'Politica',
            'description' => 'Articolo di politica',
            'visible' => true,
            'body' => '...',
        ]);

        $article = new Article();

        $article->title = 'Titolo #4';
        $article->category = 'Sport';
        $article->description = 'Articolo di sport';
        $article->visible = true;
        $article->body = '...';

        $article->save();
    }
}
