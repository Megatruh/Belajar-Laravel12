<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::factory(300)->recycle([
            User::all(),
            Category::all()
        ])->create();
    }
}
