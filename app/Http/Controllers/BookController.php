<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $latestbooks = Book::all()->sortBy('date')->values();

        return view('home', compact('books', 'latestbooks'));
    }

    public function show($id){
        $book = Book::find($id);
        $latestbook = Book::find($id);

        return view('detail', compact('book', 'latestbook'));
    }
}
