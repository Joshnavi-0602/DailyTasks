@extends('layout')

@section('content')
    <h2> Books List </h2>
    <ul>
        @foreach($books as $book)
    
            <li>
                {{ $book->title }} by {{ $book->author }} ({{ $book->published_year }}) it's about {{$book->description}}
            <!--Edit Button-->
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>

@endsection
