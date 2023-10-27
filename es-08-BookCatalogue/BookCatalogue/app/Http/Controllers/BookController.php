<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where('user_id', auth()->user()->id)->get();
        
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        return view('books.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $book = Book::create($request->all());

        $book->user_id = auth()->user()->id;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $fileName = \Illuminate\Support\Str::slug($book->title).'.'.$request->file('image')->extension();

            $imagePath = $request->file('image')->storeAs("public/images/$book->id", $fileName);

            $book->image = $imagePath;
        }
        
        $book->save();

        return redirect()->route('books.index')->with(['success' => 'Book add with success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index')->with(['success' => 'Book edit with success!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with(['success' => 'Book deleted with success!']);
    }
}
