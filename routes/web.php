<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;

Route::get('/',[PageController::class,'homes']);
Route::get('/about',[PageController::class,'about']); 
Route::get('/team/{name}',[PageController::class,'team']);
Route::get('/books',[BookController::class,'jsonIndex']);
Route::get('/books/view', [BookController::class, 'listView']);
//Route::get('/books/{id}',[BookController::class,'show']);
Route::get('/books/{id}/details',[BookController::class,'details']);
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
//Route::get('/books/{id}',[BookController::class,'showupdate']);
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
