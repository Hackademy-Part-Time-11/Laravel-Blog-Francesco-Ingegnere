<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
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

    public function create() {
        return view('account.articles.create');
    }

    public function store(StoreArticleRequest $request) {
        $article = Article::create($request->all());

        if($request->hasFile('image') && $request->file('image')->isValid()){
            // $fileName = 'cover.jpg'; //nome imposto
            // $fileName = uniqid('article_image_').'.'.$request->file('image')->extension(); //nome con id random
            // $fileName = $request->file('image')->getClientOriginalName(); // nome originale file
            $fileName = \Illuminate\Support\Str::slug($article->title).'.'.$request->file('image')->extension();

            $imagePath = $request->file('image')->storeAs("public/articles/$article->id", $fileName);

            $article->image = $imagePath;

            $article->save();
        }

        return redirect()->back()->with(['success' => 'Articolo creato correttamente']);
    }

    public function insertData() {
        Article::create([
            'title' => 'Titolo #1',
            'category' => 'Economia',
            'description' => 'Articolo di economia',
            'visible' => false,
            'body' => '...',
        ]);

        Article::create([
            'title' => 'Titolo #2',
            'category' => 'Esteri',
            'description' => 'Articolo di esteri',
            'body' => '...',
        ]);

        Article::create([
            'title' => 'Titolo #3',
            'category' => 'Politica',
            'description' => 'Articolo di politica',
            'body' => '...',
        ]);

        $article = new Article();

        $article->title = 'Titolo #4';
        $article->category = 'Sport';
        $article->description = 'Articolo di sport';
        $article->body = '...';

        $article->save();
    }
}
