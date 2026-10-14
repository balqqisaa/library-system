@extends('layouts.app')

@section('title', 'Tambah Buku Baru')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red; margin-top: 5px;">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author') }}">
            @error('author')
                <p style="color: red; margin-top: 5px;">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="text" name="year" value="{{ old('year') }}">
            @error('year')
                <p style="color: red; margin-top: 5px;">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Stok:</label><br>
            <input type="text" name="stock" value="{{ old('stock') }}">
            @error('stock')
                <p style="color: red; margin-top: 5px;">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection