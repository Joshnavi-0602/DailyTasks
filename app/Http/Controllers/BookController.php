<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function jsonIndex()
    {
        $books = Book::all();
        return response()->json($books);
    }

   // Fetch book by ID and return JSON
    public function show($id){
        $books = Book::find($id);

        if(!$books){
            return response()->json(['Message' => 'Book not found'],404);
        }

        return response()->json($books);
    }

   
    // Fetch only description of the book by ID

    public function details($id)
    {
        $books = Book::find($id);

        if(!$books){
            return "Book not found";
        }
        return $books->description;
    } 

    // Fetch all books and show in Blade view
    public function listView()
    {
        $books = Book::all(); // Fetch all books
        return view('books.index', ['books' => $books]);

    }


    public function create() 
    {
        return view('books.create');
    }

    public function store(Request $request) 
    {
        //Book::create($request->all());
        //return redirect()->route('books.create')->with('success', 'Book added!');

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_year = $request->published_year;
        $book->description = $request->description ?? 'No description';

        $book->save();

        return redirect('/books/view');
    }




}

