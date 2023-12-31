<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $articles = Article::where('user_id', auth()->user()->id)->get();
        // $articles = auth()->user()->articles;
        // $articles = Article::paginate(4);
        
        return view('account.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('account.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());

        $article->user_id = auth()->user()->id;

        $article->categories()->attach($request->categories);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            // $fileName = 'cover.jpg'; //nome imposto
            // $fileName = uniqid('article_image_').'.'.$request->file('image')->extension(); //nome con id random
            // $fileName = $request->file('image')->getClientOriginalName(); // nome originale file
            $fileName = \Illuminate\Support\Str::slug($article->title).'.'.$request->file('image')->extension();

            $imagePath = $request->file('image')->storeAs("public/images/$article->id", $fileName);

            $article->image = $imagePath;
        }
        
        $article->save();

        return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }

        return view('account.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }

        $article->update($request->all());

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        return redirect()->route('articles.index')->with(['success' => 'Articolo modificato con successo!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if($article->user_id != auth()->user()->id) {
            abort(403);
        }
        
        $article->categories()->detach();

        $article->delete();
        return redirect()->back()->with(['success' => 'Articolo cancellato con successo!']);
    }
}
