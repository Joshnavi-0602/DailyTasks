@extends('layout')

@section('content')
    <h2> Books List </h2>
    <ul>
        @foreach($books as $book)
    
            <li>
                {{ $book->title }} by {{ $book->author }} ({{ $book->published_year }})
            </li>
        @endforeach
    </ul>
