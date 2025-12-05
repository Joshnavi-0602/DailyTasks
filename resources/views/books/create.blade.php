@extends('layout')

@section('content')

<h2> Add new Book </h2>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required><br><br>

    <label>Author:</label>
    <input type="text" name="author" required><br><br>

    <label>Published Year:</label>
    <input type="number" name="published_year" required><br><br>

    <label>Description:</label>
    <input type="text" name="description"><br><br>


    <button type="submit">Add Book</button>
</form>
@endsection