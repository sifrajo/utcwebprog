<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Detail;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        // $detail = Detail::find($id);

        return view('home', compact('books'));
    }

    public function show($idBook){
        $book = Book::find($idBook);

        return view('detail', compact('book'));
    }
}
