@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach($books as $book)
            <li>
                <strong><a href="/books/{{ $book->id }}">{{ $book->title }}</a></strong> - 
                Penulis: {{ $book->author }} | 
                Tahun: {{ $book->year }} | 
                Stok: {{ $book->stock }}
            </li>
        @endforeach
    </ul>
@endsection