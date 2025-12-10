@extends('layout')

@section('content')
    <h2> Books List </h2>
    <ul>
        @foreach($books as $book)
    
            <li>
                {{ $book->title }} by {{ $book->author }} ({{ $book->published_year }}) it's about {{$book->description}}
                <!--Edit Button-->
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
            
                <!-- Delete Button -->
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                </form> 
            </li> 
        @endforeach
    </ul>

@endsection
