<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Pemrograman', 'Basis Data', 'Jaringan Komputer', 'Sistem Informasi', 'Algoritma'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}