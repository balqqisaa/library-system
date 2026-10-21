<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255|unique:books,title',
            'author'      => 'required|string|min:3|max:255',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required'       => 'Judul buku wajib diisi.',
            'title.unique'         => 'Judul buku sudah terdaftar dalam database.',
            'author.required'      => 'Nama penulis wajib diisi.',
            'author.min'           => 'Nama penulis minimal harus 3 karakter.',
            'year.required'        => 'Tahun terbit wajib diisi.',
            'year.integer'         => 'Tahun terbit harus berupa angka bulat.',
            'year.min'             => 'Tahun terbit minimal tahun 1900.',
            'year.max'             => 'Tahun terbit tidak boleh melebihi tahun saat ini.',
            'stock.required'       => 'Stok buku wajib diisi.',
            'stock.integer'        => 'Stok buku harus berupa angka.',
            'stock.min'            => 'Stok buku tidak boleh kurang dari 0 (negatif).',
            'stock.max'            => 'Stok buku maksimal adalah 1000.',
            'category_id.required' => 'Kategori buku wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid atau tidak tersedia.',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255|unique:books,title,' . $book->id,
            'author'      => 'required|string|min:3|max:255',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required'       => 'Judul buku wajib diisi.',
            'title.unique'         => 'Judul buku sudah terdaftar dalam database.',
            'author.required'      => 'Nama penulis wajib diisi.',
            'author.min'           => 'Nama penulis minimal harus 3 karakter.',
            'year.required'        => 'Tahun terbit wajib diisi.',
            'year.integer'         => 'Tahun terbit harus berupa angka bulat.',
            'year.min'             => 'Tahun terbit minimal tahun 1900.',
            'year.max'             => 'Tahun terbit tidak boleh melebihi tahun saat ini.',
            'stock.required'       => 'Stok buku wajib diisi.',
            'stock.integer'        => 'Stok buku harus berupa angka.',
            'stock.min'            => 'Stok buku tidak boleh kurang dari 0 (negatif).',
            'stock.max'            => 'Stok buku maksimal adalah 1000.',
            'category_id.required' => 'Kategori buku wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid atau tidak tersedia.',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }
}