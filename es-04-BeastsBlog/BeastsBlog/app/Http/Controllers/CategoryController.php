<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('account.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('account.categories.form', [
            'action' => route('categories.store'),
            'title' => 'Crea una nuova categoria',
            'button' => 'Inserisci',
            'category' => new Category(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());
   
        return redirect()->route('categories.index')->with(['success' => 'Categoria creata correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('account.categories.form', [
            'action' => route('categories.update', $category),
            'title' => 'Modifica categoria',
            'button' => 'Modifica',
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index')->with(['success' => 'Categoria modificata con successo!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->articles->count()) {
            return redirect()->back()->with(['warning' => 'Impossibile cancellare la categoria perchè ci sono articoli collegati']);
        }

        /* $category->articles()->detach(); */

        $category->delete();
        return redirect()->back()->with(['success' => 'Categoria cancellata con successo!']);
    }
}
