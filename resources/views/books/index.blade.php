@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    <p>
        <a href="{{ route('books.create') }}">+ Tambah Buku Baru</a>
    </p>

    <ul>
        @foreach($books as $book)
            <li>
                <strong><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></strong> - 
                Penulis: {{ $book->author }} | 
                Tahun: {{ $book->year }} | 
                Stok: {{ $book->stock }}
                
                [<a href="{{ route('books.edit', $book) }}">Edit</a>]

                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection