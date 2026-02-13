<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'Pemodelan dan Simulasi',
            'slug' => Str::slug('Pemodelan dan Simulasi'),
            'color' => 'bg-yellow-100 text-yellow-900 dark:bg-yellow-200 dark:text-yellow-800'
        ]);

        Category::create([
            'name'=> 'Jaringan Komputer',
            'slug' => Str::slug('Jaringan Komputer'),
            'color' => 'bg-blue-100 text-blue-900 dark:bg-blue-200 dark:text-blue-800'
        ]);

        Category::create([
            'name'=> 'Pemrograman Web',
            'slug' => Str::slug('Pemrograman Web'),
            'color' => 'bg-green-100 text-green-900 dark:bg-green-200 dark:text-green-800'
        ]);
    }
}
