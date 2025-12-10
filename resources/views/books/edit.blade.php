
@extends('layout')

@section('content')

<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ $book->title }}" required><br><br>

    <label>Author:</label>
    <input type="text" name="author" value="{{ $book->author }}" required><br><br>

    <label>Published Year:</label>
    <input type="number" name="published_year" value="{{ $book->published_year }}" required><br><br>

    <label>Description:</label>
    <input type="text" name="description" value="{{ $book->description }}"><br><br>

    <button type="submit">Update Book</button>
</form>

@endsection
