@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Library System Dashboard</h2>
    <p>Selamat datang di Sistem Informasi Perpustakaan.</p>
    
    <h3>Statistik Perpustakaan:</h3>
    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>
@endsection