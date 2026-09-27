<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Sang Alkemis (The Alchemist)',
            'author' => 'Paulo Coelho',
            'year' => 1988,
            'stock' => 7,
        ]);

        Book::create([
            'title' => 'Animal Farm',
            'author' => 'George Orwell',
            'year' => 1945,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laut Bercerita',
            'author' => 'Leila S. Chudori',
            'year' => 2017,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'year' => 2005,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Bumi Manusia',
            'author' => 'Pramoedya Ananta Toer',
            'year' => 1980,
            'stock' => 6,
        ]);
    }
}