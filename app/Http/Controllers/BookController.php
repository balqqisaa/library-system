<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Pemrograman PHP', 'author' => 'Andi Wijaya', 'year' => 2021],
            ['id' => 2, 'title' => 'Laravel untuk Pemula', 'author' => 'Budi Santoso', 'year' => 2022],
            ['id' => 3, 'title' => 'Basis Data Relasional', 'author' => 'Citra Dewi', 'year' => 2020],
            ['id' => 4, 'title' => 'Algoritma & Pemrograman', 'author' => 'Eko Prasetyo', 'year' => 2019],
            ['id' => 5, 'title' => 'Pemrograman Web Modern', 'author' => 'Fajar Nugraha', 'year' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}