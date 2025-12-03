<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homes(){
        return view('welcome');
    }

    public function about(){
        return "This is the About Page.";
    }

    public function team($name){
        return "Team Member: " . $name;
    }
}
