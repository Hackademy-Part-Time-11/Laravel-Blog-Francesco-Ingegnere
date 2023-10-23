<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function showHome() {
        $title = env('APP_NAME');
        return view('home', compact('title'));
    }

    public function showAboutMe() {
        $description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore itaque obcaecati minus nisi adipisci id voluptas qui impedit sapiente, ipsa perspiciatis harum assumenda eveniet nam? Numquam dolore repellendus nobis itaque!';
        return view('pages.aboutMe', compact('description'));
    }

    public function showAccount() {
        return view('account');
    }

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
}
