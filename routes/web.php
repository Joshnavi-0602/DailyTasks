<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;

Route::get('/',[PageController::class,'homes']);
Route::get('/about',[PageController::class,'about']);
Route::get('/team/{name}',[PageController::class,'team']);
Route::get('/books',[BookController::class,'index']);