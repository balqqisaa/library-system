<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Mengambil seluruh data dari tabel books

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id); // Mengambil detail data berdasarkan ID

        return view('books.show', compact('book'));
    }
}