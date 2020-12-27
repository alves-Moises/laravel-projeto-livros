<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BooksController extends Controller
{
    public function create(){
        return view('books.create');
    }
    public function store(Request $request)
    {
        Book::Create([
            'name' => $request->name;
            'author' => $request->author;
            'launch' => $request->launch;
            'status' => $request->status;
            'classification' => $request->classification;
        ]);

        return "Book added succefull!";
    }
}
