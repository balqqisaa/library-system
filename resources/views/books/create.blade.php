@extends('layouts.app')

@section('title', 'Tambah Buku Baru')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" required>
        </div>
        <br>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" required>
        </div>
        <br>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" required>
        </div>
        <br>
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection