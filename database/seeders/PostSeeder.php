<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::factory(30)->recycle([
            User::all(),
            Category::all()
        ])->create();
    }
}
