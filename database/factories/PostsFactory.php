<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(5,8));

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'city' => fake()->city(),
            'body'=> fake()->paragraphs(rand(3,6), true)
        ];
    }
}
