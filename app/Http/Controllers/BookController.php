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
        $book = Book::find($id);

        if(!$book){
            return response()->json(['Message' => 'Book not found'],404);
        }

        return response()->json($book);
    }

   
    // Fetch only description of the book by ID

    public function details($id)
    {
        $book = Book::find($id);

        if(!$book){
            return "Book not found";
        }
        return $book->description;
    } 

// Fetch all books and show in Blade view
    public function listView()
    {
        $books = Book::all(); // Fetch all books
        return view('books.index', ['books' => $books]);

    }
}
