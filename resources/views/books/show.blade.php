@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>

    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Judul Buku:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Stok Tersedia:</strong> {{ $book->stock }}</p>

    <br>
    <a href="{{ route('books.edit', $book) }}">Edit Buku Ini</a> | 
    <a href="{{ route('books.index') }}">&laquo; Kembali ke Daftar Buku</a>
@endsection