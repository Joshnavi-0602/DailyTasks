<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

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

        //return response()->json($books);
        return response($books);
    }

   
    // Fetch only description of the book by ID

    public function details($id)
    {
        $books = Book::find($id);

        if(!$books){
            return "Book not found";
        }
        //return response()->json($books->description);
        //return response()->json([ 'description' => $book->description ]);
        return $books->description; // Not in JSON format('Plain text')
    } 

    // Fetch all books and show in Blade view
    public function listView()
    {
        $books = Book::all(); // Fetch all books
        return view('books.index', ['books' => $books]);

    }


    // Create form to store data
    public function create() 
    {
        return view('books.create');
    }

    // Store-insert into DB & Fetch the added + existing data
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

    // Edit the data by ID
    public function edit($id)
    {
    $book = Book::find($id);

    return view('books.edit', compact('book'));
    }

    // Updating the data
    public function update(Request $request, $id)
    {

    $book = Book::find($id);

    $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'published_year' => $request->published_year,
        'description' => $request->description,
    ]);

    return redirect('/books/view');
    //return redirect()->route('books.view');

    }


}

