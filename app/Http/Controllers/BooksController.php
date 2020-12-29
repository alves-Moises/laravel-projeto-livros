<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BooksController extends Controller
{
    public function create(){
        return view('books.create');
    }
    public function store(Request $request)
    {
        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'launch' => $request->launch,
            'status' => $request->status,
            'classification' => $request->classification
        ]);

        return "Book added succefull!";
    }
}
