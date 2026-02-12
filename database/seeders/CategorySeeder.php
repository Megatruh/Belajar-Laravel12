<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'Pemodelan dan Simulasi',
            'slug' => Str::slug('Pemodelan dan Simulasi')
        ]);

        Category::create([
            'name'=> 'Jaringan Komputer',
            'slug' => Str::slug('Jaringan Komputer')
        ]);

        Category::create([
            'name'=> 'Pemrograman Web',
            'slug' => Str::slug('Pemrograman Web')
        ]);
    }
}
